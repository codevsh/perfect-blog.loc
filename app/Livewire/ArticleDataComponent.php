<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class ArticleDataComponent extends Component
{
    public $article, $article_id;
    public $countLikes;
    public function mount( $article)
    {
        $this->article = $article;
    }
    #[On('countComments')]
    #[On('countLikes')]
    public function render()
    {
        // $countComments = $this->article->comments->count();
        return view('livewire.article-data-component');
    }
}
