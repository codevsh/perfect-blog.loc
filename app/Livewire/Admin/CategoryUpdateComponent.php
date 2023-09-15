<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryUpdateComponent extends Component
{
    public $title, $slug, $category;
    public function mount($category)
    {
        $this->category = $category;
        $this->title = $category->title;
        $this->slug = $category->slug;
    }
    public function geterateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {

        return view('livewire.admin.category-update-component');
    }
}
