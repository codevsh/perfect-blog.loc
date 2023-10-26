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
        $articles = Article::query()
            ->where('title', 'LIKE', "%" . $search . "%")
            ->orWhere('description', 'LIKE', "%" . $search . "%")
            ->paginate(5);

        return view('main.search', compact('articles','search'));
    }
}
