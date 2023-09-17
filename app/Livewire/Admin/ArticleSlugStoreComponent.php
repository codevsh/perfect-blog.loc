<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

class ArticleSlugStoreComponent extends Component
{
    public $title, $slug;
    public function geterateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {
        return view('livewire.admin.article-slug-store-component');
    }
}
