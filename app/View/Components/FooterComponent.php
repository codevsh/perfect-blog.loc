<?php

namespace App\View\Components;

use Closure;
use App\Models\Social;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FooterComponent extends Component
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
        $socials = Social::all();
        return view('components.footer-component', ['socials' => $socials]);
    }
}
