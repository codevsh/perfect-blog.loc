<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySlugComponent extends Component
{
    public $slug, $title, $meta_title, $meta_description, $meta_keywords;
    protected $rules = [
        'title' => 'required|string',
        "slug" => "required|string|unique:categories,slug",
        'meta_title' => 'nullable|string',
        'meta_description' => 'nullable|string',
        'meta_keywords' => 'nullable|string'
    ];
    public function geterateSlug()
    {
        $this->slug = Str::slug($this->title);
    }
    public function store_form()
    {
        $this->validate();
        $result = Category::create([
           'title' => $this->title,
           'slug' => $this->slug,
           'meta_title' => $this->meta_title,
           'meta_description' => $this->meta_description,
           'meta_keywords' => $this->meta_keywords
        ]);
        if ($result) {
            return redirect()->route('admin.category.index', app()->getLocale())->with('success', trans('Category has been created successfully!'));
        } else {
            return back()->with('error', trans('Something went wrong'));
        }

    }
    public function render()
    {


        return view('livewire.admin.category-slug-component');
    }
}
