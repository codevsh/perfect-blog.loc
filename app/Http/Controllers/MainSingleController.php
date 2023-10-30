<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainSingleController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        $rarticles = Article::where('category_id', $article->category->id)->get()->take(4);
        return view('main.show', compact('article', 'rarticles'));
    }
}
