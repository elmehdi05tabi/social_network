<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Mail\ProfileMail;
use App\Models\Profile;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ProfileController extends Controller
{
    private const CACH_KEY = 'profiles'  ;
    public function __construct() {
        $this->middleware('auth')->except('create','store','verify_email') ; 
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Cache::remember(self::CACH_KEY,120,function(){
            return Profile::paginate(9); 
        });
        Cache::forget(self::CACH_KEY) ; 
        return view("profiles.index",compact('profiles')) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.creat');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileRequest $request,ImageService $imageService)
    {
        $formField = $request->validated() ; 
        // hash password 
        $formField['password'] = Hash::make($formField['password']) ;
        // for image 
        $formField['image'] = $imageService->upload($request->file('image')) ; 
        Cache::forget(self::CACH_KEY);
        $profile = Profile::create($formField);
        Mail::to('elmehditabi0@gmail.com')->send(new ProfileMail($profile));
        if($profile->email_verified_at!==NULL) {
            return to_route('profiles.index')->with('success','Your profile has been created.') ; 
        }else {
            return view('profiles.verification') ;
        } ; 
    }
    public function verify_email(string $hash) {
        [$created_at,$id] = explode('///',base64_decode($hash)) ; 
        $profile = Profile::findOrfail($id) ; 
        // dd($profile->created_at->toDateTimeString());
        if($profile->created_at->toDateTimeString() !== $created_at) {
            abort(403) ; 
        }
        if($profile->email_verified_at !==NULL) {
            return response('Compte Déaja Activé') ; 
        }
        $profile->fill([
                'email_verified_at' => date('Y-m-d h-s-i') 
                ])->save() ; 
                return to_route('login.show')->with('success','Account created. Please log in.') ; 

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = Cache::remember('profile_'.$id,120,function()use($id){
            return Profile::findOrFail($id) ; 
        });
        $profile->load('publications');
        return view('profiles.show',compact('profile')) ; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        $this->authorize('update',$profile) ; 
        return view('profiles.edit',compact('profile')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProfileRequest $request, Profile $profile ,ImageService $imageService)
    {
        $formField = $request->validated() ; 
        $formField['password'] = Hash::make($formField['password']) ;
        if($request->hasFile('image')) {
            $formField['image'] = $imageService->upload($request->file('image')) ; 
        } 
        // update 
        $profile->fill($formField)->save();
        Cache::forget(self::CACH_KEY);
        return to_route('profiles.index')->with('success','Profile is Updated') ; 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        // dd($profile) ;
        $this->authorize('delete',$profile) ; 
        $profile->delete() ; 
        Cache::forget(self::CACH_KEY);
        return to_route('profiles.index')->with('success','Profile Deleted') ; 
    }
}
