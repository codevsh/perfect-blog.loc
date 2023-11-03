<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Controllers\Admin\BaseController;

class ArticleController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.articles.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('admin.article.index')->with('success', trans('Article has been created successfully!'));
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        // dd($slug);
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('admin.articles.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $data = $request->validated();
       $this->service->update($data, $article);

        return redirect()->route('admin.article.index', [app()->getLocale()])->with('success', 'Article has been udated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $destination = public_path('storage\\' . $article->prev_img);
        $destination1 = public_path('storage\\' . $article->main_img);
        if (isset($article->prev_img) && $article->prev_img != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
        }
        if (isset($article->main_img) && $article->main_img != null) {
            if (File::exists($destination1)) {
                File::delete($destination1);
            }
        }
        $article->delete();
        return redirect()-> route('admin.article.index')->with('success', trans('Article has ben deletedsuccessfully!'));
    }
}
