<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Mockery\Undefined;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private const CACHE_KEY  = 'publications' ; 
    public function index()
    {
        $publications = Cache::remember(self::CACHE_KEY,86400,function(){
            return Publication::with('profile')->latest()->get();
        }) ;
        return view("publication.index",compact('publications')) ; 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publication.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request,ImageService $imageService)
    {
        $formFiald = $request->validated() ; 
        if($request->hasFile('image')) {
            $formFiald['image'] = $imageService->upload($request->file('image')) ; 
        }else {
            $formFiald['image']=""; 
        }
        $formFiald['profile_id'] = Auth::id();
        Publication::create($formFiald);
        Cache::forget(self::CACHE_KEY);
        return to_route('publications.index')->with('success','The publication has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)

    {
        $this->authorize('update',$publication) ; 
        return view('publication.edit',compact('publication')) ; 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationRequest $request ,Publication $publication,ImageService $imageService)
    {
        $formFiald = $request->validated() ; 
        if($request->hasFile('image')) {
            $formFiald['image'] = $imageService->upload($request->file('image')) ; 
        }
        Cache::forget(self::CACHE_KEY);
        return to_route('publications.index')->with('success','Publication updated successfully.')  ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $this->authorize('delete',$publication) ; 
       $publication->delete() ; 
        Cache::forget(self::CACHE_KEY);
       return to_route('publications.index')->with('success','Publication deleted successfully.'); 
    }
}
