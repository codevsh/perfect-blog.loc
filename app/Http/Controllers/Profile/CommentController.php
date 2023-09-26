<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = auth()->user()->comments;
        return view('main.profile.comments.index', compact('comments'));
    }
    public function edit($locale, Comment $comment)
    {
        return view('main.profile.comments.edit', compact('comment'));

    }
    public function update($locale, Request $request, Comment $comment)
    {
        // dd($request->all());
        $data = $request->validate([
            'content' => 'required|string'
        ]);
        $result = $comment->update($data);
        if ($result) {
            return redirect()->route('profile.comments')->with('success', trans('Your comment has been updated successfully!'));
        } else {
           return back()->with('error', trans('Something went wrong'));
        }

    }
    public function destroy($locale, Comment $comment)
    {
        $result = $comment->delete();
        if ($result) {
            return redirect()->route('profile.comments')->with('success', trans('Your comment has been deleted '));
        } else {
           return back()->with('error', trans('Something went wrong'));
        }
    }
}