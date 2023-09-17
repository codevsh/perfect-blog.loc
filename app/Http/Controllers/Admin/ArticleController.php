<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::paginate(10);
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
        // dd($request->all());
        $data = $request->validated();

        $tadIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $prev_img = $request->file('prev_img');
        $filePrevName = $prev_img->getClientOriginalName();
        $filePrevExt = $prev_img->getClientOriginalExtension();
        $resizePrevImg = Image::make($prev_img->getRealPath())->resize(720, 430, function ($constraint) {
            $constraint->aspectRatio();
        })->fit(720, 430);
        $newPrevFileName = 'prev_' . time() . '.' . $filePrevExt;
        $resizePrevImg->save(public_path('storage/articles/' . $newPrevFileName));
        $data['prev_img'] = 'articles/' . $newPrevFileName;

        $main_img = $request->file('main_img');
        $fileMainName = $main_img->getClientOriginalName();
        $fileMainExt = $main_img->getClientOriginalExtension();
        $resizeMainImg = Image::make($main_img->getRealPath())->resize(1280, 768, function ($constraint) {
            $constraint->aspectRatio();
        });
        $newMainFileName = 'main_' . time() . '.' . $fileMainExt;
        $resizeMainImg->save(public_path('storage/articles/' . $newMainFileName));
        $data['main_img'] = 'articles/' . $newMainFileName;

        $article = Article::firstOrCreate($data);

        $article->tags()->attach($tadIds);

        return redirect()->route('admin.article.index')->with('success', trans('Article has been created succesfully!'));
    }

    /**
     * Display the specified resource.
     */
    public function show($locale, $slug)
    {
        // dd($slug);
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('admin.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($locale, $slug)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('admin.articles.edit', compact('article', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($locale, UpdateArticleRequest $request, $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $data = $request->validated();
        $tagIds = $data['tag_ids'];
        unset($data['tag_ids']);

        $destination = public_path('storage\\' . $article->prev_img);
        $destination1 = public_path('storage\\' . $article->main_img);
        if (isset($data['prev_img']) && $data['prev_img'] != null) {
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $prevImg = $request->file('prev_img');
            $filePrevName = $prevImg->getClientOriginalName();
            $filePrevExt = $prevImg->getClientOriginalExtension();
            $resizePrevImg = Image::make($prevImg->getRealPath())->resize(720, 430, function ($constraint) {
                $constraint->aspectRatio();
            })->fit(720, 430);
            $newfilePrevName = 'prev_' . time() . '.' . $filePrevExt;
            $resizePrevImg->save(public_path('storage/articles/' . $newfilePrevName));

            $data['prev_img'] = 'articles/' . $newfilePrevName;
        } else {
            $data['prev_img'] = $article->prev_img;
        }

        if (isset($data['main_img']) && $data['main_img'] != null) {
            if (File::exists($destination1)) {
                File::delete($destination1);
            }
            $mainImg = $request->file('main_img');
            $fileMainName = $mainImg->getClientOriginalName();
            $fileMainExt = $mainImg->getClientOriginalExtension();
            $resizeMainImg = Image::make($mainImg->getRealPath())->resize(1280, 768, function ($constraint) {
                $constraint->aspectRatio();
            });
            $newfileMainName = 'main_' . time() . '.' . $fileMainExt;
            $resizeMainImg->save(public_path('storage/articles/' . $newfileMainName));

            $data['main_img'] = 'articles/' . $newfileMainName;
        } else {
            $data['main_img'] = $article->main_img;
        }

        $article->update($data);
        $article->tags()->sync($tagIds);

        return redirect()->route('admin.article.index', [app()->getLocale()])->with('success', 'Article has been udated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($locale, $slug)
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
