<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class CategoryUpdateComponent extends Component
{
    public $title, $slug, $meta_title, $meta_description, $meta_keywords;
    public function mount($slug)
    {
        $this->slug = $slug;
    }
    public function editCategory($category)
    {
        $this->title = $category->title;
    }
    public function render($category)
    {

        return view('livewire.admin.category-update-component', compact('slug'));
    }
}
