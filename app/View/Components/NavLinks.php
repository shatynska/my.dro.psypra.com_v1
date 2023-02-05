<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NavLinks extends Component
{

    public $navTag;
    public $navLinks;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($navTag, $navLinks)
    {
        $this->navTag = $navTag;
        $this->navLinks = $navLinks;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.nav-links');
    }
}
