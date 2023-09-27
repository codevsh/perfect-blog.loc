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
        $articles = Article::orderBy('id', 'DESC');
        if (request()->has('search')) {
            $articles = $articles->where('description', 'like', '%' . request()->get('search', '') . '%');
        }
        $likedArticles = Article::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        $categories = Category::all();
        $tags = Tag::all();
        return view('main.index', ['articles' => $articles->paginate(5)], compact( 'categories', 'tags', 'likedArticles'));
    }

}
