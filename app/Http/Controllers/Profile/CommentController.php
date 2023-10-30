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
    public function edit(Comment $comment)
    {
        return view('main.profile.comments.edit', compact('comment'));

    }
    public function update(Request $request, Comment $comment)
    {
        // dd($request->all());
        $data = $request->validate([
            'content' => 'required|string'
        ]);
        $result = $comment->update($data);
        if ($result) {
            return redirect()->route('profile.comments')->with('success', trans('You have successfully update comment on the article'));
        } else {
           return back()->with('error', trans('Something went wrong'));
        }

    }
    public function destroy(Comment $comment)
    {
        $result = $comment->delete();
        if ($result) {
            return redirect()->route('profile.comments')->with('success', trans('Comment has been deleted successfully'));
        } else {
           return back()->with('error', trans('Something went wrong'));
        }
    }
}
