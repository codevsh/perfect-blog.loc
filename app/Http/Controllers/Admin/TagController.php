<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tags = Tag::paginate(15);
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTagRequest $request)
    {
        $data = $request->validated();
        $result = Tag::create($data);
        if ($result) {
            return redirect()->route('admin.tag.index')->with('success', trans('Tag has been created successfully!'));
        } else {
           return back()->with('error', 'Somethin went wrong');
        }

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagRequest $request, $slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $data = $request->validated();
        $result = $tag->update($data);
        if ($result) {
            return redirect()->route('admin.tag.index')->with('success', trans('Tag has been updated successfully!'));
        } else {
           return back()->with('error', 'Somethin went wrong');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $result = $tag->delete();
        if ($result) {
            return redirect()->route('admin.tag.index')->with('success', trans('Tag has been deleted successfully!'));
        } else {
           return back()->with('error', 'Somethin went wrong');
        }
    }
}
