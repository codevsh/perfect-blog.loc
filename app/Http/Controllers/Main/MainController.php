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
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        $likedArticles = Article::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        $categories = Category::all();
        $tags = Tag::all();
        return view('main.index', compact('articles', 'categories', 'tags', 'likedArticles'));
    }

}
