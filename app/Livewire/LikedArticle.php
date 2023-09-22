<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Livewire\ArticleDataComponent;

class LikedArticle extends Component
{
    public $article, $user, $article_id;
    public function mount(Article $article)
    {
        $this->article = $article;
        $this->article_id = $this->article->id;
    }
    public function likeUserArticle(Article $article)
    {
        $this->article = $article;
        auth()->user()->likedArticle()->toggle($this->article);

        $this->dispatch('countLikes')->to(ArticleDataComponent::class);
    }
    public function render()
    {
        $this->dispatch('countLikes')->to(ArticleDataComponent::class);
        return view('livewire.liked-article');
    }
}
