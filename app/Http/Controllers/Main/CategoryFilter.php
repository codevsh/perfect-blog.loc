<?php

namespace App\Http\Controllers\Main;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class CategoryFilter extends Controller
{
    public function index($locale, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        $articles = Article::where('category_id', $category->id)->paginate(5);
        $categories = Category::all();
        $tags = Tag::all();
        $likedArticles = Article::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('main.caregory-filter', compact('articles', 'category', 'categories', 'tags', 'likedArticles'));
    }
}
