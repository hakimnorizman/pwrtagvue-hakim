<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RegistrationModal extends Component
{
    public $formTitle, $formSubtitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($formTitle, $formSubtitle)
    {
        $this->formTitle = $formTitle;
        $this->formSubtitle = $formSubtitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.registration-modal');
    }
}
