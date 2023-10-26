<?php

namespace App\View\Components;

use Closure;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MainSidebarComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = Category::all();
        $tags = Tag::all();
        $likedArticles = Article::withCount('likedUsers')->orderBy('liked_users_count', 'DESC')->get()->take(4);
        return view('components.main-sidebar-component', compact('categories', 'tags', 'likedArticles'));
    }
}
