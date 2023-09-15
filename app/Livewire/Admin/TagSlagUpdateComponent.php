<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

class TagSlagUpdateComponent extends Component
{
    public $title, $slug, $tag;
    public function mount($tag)
    {
        $this->tag = $tag;
        $this->title = $tag->title;
        $this->slug = $tag->slug;
    }
    public function geterateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {
        return view('livewire.admin.tag-slag-update-component');
    }
}
