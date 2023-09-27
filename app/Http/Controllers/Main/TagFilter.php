<?php

namespace App\Http\Controllers\Main;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagFilter extends Controller
{
    public function index($locale, $slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $articles = $tag->articles()->paginate(5);
        $categories = Category::all();
        $tags = Tag::all();
        $likedArticles = Article::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('main.tag-filter', compact('articles', 'tag', 'categories', 'tags', 'likedArticles'));
    }
}
