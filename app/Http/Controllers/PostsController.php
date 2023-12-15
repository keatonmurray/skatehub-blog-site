<?php

namespace App\Http\Controllers;

use App\Models\Videos;
use App\Models\Content;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = [
            'videos' => Videos::latest()->paginate(3),
            'articles' => Content::latest()->paginate(4)
        ];

        return view('pages.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'subject' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Content::create($formFields);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $articles = Content::find($id);
         
        if($articles) {
            return view('pages.show')->with('articles', $articles);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Content $id)
    {
        return view('pages.edit', ['articles' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Content $id)
    {
        $formFields = $request->validate([
            'subject' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $id->update($formFields);
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articles = Content::find($id);
        $articles->delete();

        return redirect('/');
    }
}
