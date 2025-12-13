<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Publication;
use App\Services\ImageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Undefined;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::with('profile')->latest()->get(); 
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
            $formFiald['image'] = "" ; 
        }
        $formFiald['profile_id'] = Auth::id();
        Publication::create($formFiald); 
        return to_route('publications.index')->with('success',Auth::user()->first_name.' '.Auth::user()->last_name.' Create New Post');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
       $publication->delete() ; 
       return to_route('publications.index')->with('success','Publication is Deleted'); 
    }
}
