<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

class ArticleSlugEditComponent extends Component
{
    public $slug, $title, $article;
    public function mount($article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->slug = $article->slug;
    }
    public function geterateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {
        return view('livewire.admin.article-slug-edit-component');
    }
}
