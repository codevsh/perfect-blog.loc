<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Str;

class CategorySlugComponent extends Component
{
    public $slug, $title;
    public function geterateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {


        return view('livewire.admin.category-slug-component');
    }
}
