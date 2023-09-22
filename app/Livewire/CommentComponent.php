<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;
use App\Livewire\ArticleDataComponent;

class CommentComponent extends Component
{
    public $article, $user_id, $article_id, $comment_id, $content, $comment_edited, $edit_content, $edit_id, $comment;
    public $view_edit = false;

    public function mount($article)
    {
        $this->article = $article;
    }
    public function resetFields()
    {
        $this->content = '';
    }
    #[On('commented')]
    public function StoreComment()
    {
        $comment = new Comment();
        $this->validate(
            [
            'content' => 'required|string',
            ]
        );
        $this->user_id = Auth::user()->id;
        $comment->content = $this->content;
        $comment->article_id = $this->article->id;
        $comment->user_id = $this->user_id;
        // dd($comment);
        $result = $comment->save();
        if ($result) {
            session()->flash('success', trans('You have successfully commented on the post'));
            $this->resetFields();
            $this->dispatch('countComments')->to(ArticleDataComponent::class);
        } else {
            session()->flash('error', 'Something went wrong!');
        }

    }
    public function edit_comment($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        $this->comment_id = $comment->id;
        $this->view_edit = true;
        $this->edit_content = $comment->content;
    }
    public function update_comment($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        $this->validate([
            'edit_content' => 'required|string',
        ]);
        $comment->content = $this->edit_content;
        $result = $comment->save();
        if ($result) {
            $this->resetFields();
            $this->view_edit = false;
            $this->dispatch('commented');
            $this->dispatch('countComments')->to(ArticleDataComponent::class);
            session()->flash('success', trans('Comment has been updated successfully'));
        } else {
            session()->flash('error', trans('Something went wrong'));
        }

    }
    public function deleteComment($comment_id)
    {
        $comment = Comment::findOrFail($comment_id);
        $result = $comment->delete();
        if ($result) {
            $this->resetFields();
            $this->dispatch('commented');
            $this->dispatch('countComments')->to(ArticleDataComponent::class);
            session()->flash('success', trans('Comment has been deleted successfully'));
        } else {
            session()->flash('error', trans('Something went wrong'));
        }

    }
    public function close()
    {
        $this->view_edit = false;
    }
    public function render()
    {
        // $this->edit = false;
        return view('livewire.comment-component');
    }
}
