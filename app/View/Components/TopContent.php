<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TopContent extends Component
{
    public $mainTitle, $titleColor, $subTitle, $buttonText, $buttonColor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mainTitle, $titleColor, $subTitle, $buttonText, $buttonColor)
    {
        $this->mainTitle = $mainTitle;
        $this->titleColor = $titleColor;
        $this->subTitle = $subTitle;
        $this->buttonText = $buttonText;
        $this->buttonColor = $buttonColor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.top-content');
    }
}
