<?php

namespace App\View\Components;

use App\Models\Social;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderComponent extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct()
    {


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $socials = Social::all();
        return view('components.header-component', ['socials'=> $socials]);
    }
}
