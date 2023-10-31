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
        $articles = Article::with('category')->orderBy('id', 'DESC')->paginate(5);
        return view('main.index',  compact('articles'));
    }

}
