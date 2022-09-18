<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Carbon\Carbon;

class Countdown extends Component
{
    public $date;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($date, $month, $year)
    {
        $this->date = Carbon::createFromDate($year, $month, $date)->format('M d, Y h:m:s');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.countdown');
    }
}
