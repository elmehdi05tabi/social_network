<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    private const CACH_KEY = 'profiles'  ;
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
        Profile::create($formField) ;
        $profiles = Profile::paginate(9) ;
        Cache::forget(self::CACH_KEY);
        return to_route('profiles.index',compact('profiles'))->with('success','Profile Is Good Created') ; 
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
