<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $data = $request->validated();
        $result = Category::create($data);

        if ($result) {
            return redirect()->route('admin.category.index', app()->getLocale())->with('success', trans('Category has been created successfully!'));
        } else {
            return back()->with('error', trans('Something went wrong'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        // dd($category->slug);
        $data = $request->validated();
        $result = $category->update($data);
        if ($result) {
            return redirect()->route('admin.category.index')->with('success', trans('Category has been edited successfully!'));
        } else {
            return back()->with('error', trans('Something went wrong'));
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $result = $category->delete();
        if ($result) {
            return redirect()->route('admin.category.index')->with('success', trans('Category has been deleted successfully!'));
        } else {
            return back()->with('error', trans('Something went wrong'));
        }
    }
}
