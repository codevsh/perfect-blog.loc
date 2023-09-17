<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Article;

class AdminController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        $tags = Tag::all();
        $categories = Category::all();
        $users = User::all();
        return view('admin.index', compact('categories', 'users', 'tags', 'articles'));
    }
}
