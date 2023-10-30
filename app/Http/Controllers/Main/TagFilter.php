<?php

namespace App\Http\Controllers\Main;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagFilter extends Controller
{
    public function index($slug)
    {
        $tag = Tag::where('slug', $slug)->first();
        $articles = $tag->articles()->paginate(5);
        return view('main.tag-filter', compact('articles', 'tag'));
    }
}
