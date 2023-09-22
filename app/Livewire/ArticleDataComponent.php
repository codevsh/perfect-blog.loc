<?php

namespace App\Livewire;

use Livewire\Component;

class ArticleDataComponent extends Component
{
    public $article, $article_id;
    protected $listeners = ['countComments' =>'$refresh'];
    public function mount($article)
    {
        $this->article = $article;
    }
    public function render()
    {
        $countComments = $this->article->comments->count();
        return view('livewire.article-data-component');
    }
}
