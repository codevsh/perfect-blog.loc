<?php

namespace App\Http\Controllers\Main;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class CategoryFilter extends Controller
{
    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $articles = Article::where('category_id', $category->id)->paginate(5);
        return view('main.caregory-filter', compact('articles', 'category'));
    }
}
