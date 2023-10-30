<?php

namespace App\Http\Controllers\Profile;

use App\Models\Article;
use App\Http\Controllers\Controller;
class LikedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = auth()->user()->likedArticle;
        return view('main.profile.likes.index', compact('articles'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        auth()->user()->likedArticle()->detach($article->id);
        return redirect()->route('profile.likes');
    }
}
