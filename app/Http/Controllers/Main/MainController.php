<?php

namespace App\Http\Controllers\Main;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class MainController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(5);
        $categories = Category::all();
        $tags = Tag::all();
        return view('main.index', compact('articles', 'categories', 'tags'));
    }
    // public function show($locale, $slug)
    // {
    //     $article = Article::where('slug', $slug)->firstOrFail();
    //     $rarticles = Article::where('category_id', $article->category)->get()->take(4);
    //     return view('main.show', compact('article', 'rarticles'));
    // }
}
