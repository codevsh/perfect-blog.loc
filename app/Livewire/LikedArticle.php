<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Livewire\ArticleDataComponent;

class LikedArticle extends Component
{
    public $article, $user, $article_id;
    public function mount($article)
    {
        $this->article = $article;
        $this->article_id = $this->article->id;
    }
    #[On('countLIkes')]
    public function likeUserArticle(Article $article)
    {
        $this->article = $article;
        auth()->user()->likedArticle()->toggle($article);
        $this->dispatch('countLikes')->to(ArticleDataComponent::class);
    }
    public function render()
    {
        $countLikes = $this->article->likedUsers->count();
        return view('livewire.liked-article', compact('countLikes'));
    }
}
