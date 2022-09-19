<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FooterContent extends Component
{
    public $leftInfo, $trademark;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($leftInfo, $trademark)
    {
        $this->leftInfo = $leftInfo;
        $this->trademark = $trademark;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.footer-content');
    }
}
