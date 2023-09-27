<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->search;
        // dd($search);
        $articles = Article::query()
            ->where('title', 'LIKE', "%" . $search . "%")
            ->orWhere('description', 'LIKE', "%" . $search . "%")
            ->paginate(5);
        $likedArticles = Article::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        $categories = Category::all();
        $tags = Tag::all();
        return view('main.search', compact('articles', 'categories', 'tags', 'likedArticles', 'search'));
    }
}
