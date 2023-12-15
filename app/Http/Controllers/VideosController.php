<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use Illuminate\Http\Request;

class VideosController extends Controller
{
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'location' => 'required',
            'caption' => 'required',
            'video' => 'required'
        ]);

        if($request->hasFile('video')) {
            $formFields['video'] = $request->file('video')->store('videos', 'public');
        }

        Videos::create($formFields);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $video = Videos::find($id);
         
        if ($video) {
            return view('pages.videos.show')->with('video', $video);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Videos $id)
    {
        return view('pages.videos.edit', ['video' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Videos $id)
    {
        $formFields = $request->validate([
            'location' => 'required',
            'caption' => 'required',
        ]);

        if($request->hasFile('video')) {
            $formFields['video'] = $request->file('video')->store('videos', 'public');
        }

        $id->update($formFields);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Videos::find($id);
        $video->delete();

        return redirect('/');
    }
}
