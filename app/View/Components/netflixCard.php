<?php

namespace App\View\Components;

use Illuminate\View\Component;

class netflixCard extends Component
{
    /** @var mixed */
    public $netflix;

    /**
     * @param  mixed  $movie
     * @return void
     */
    public function __construct($movie)
    {
        $this->netflix = $movie;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.netflix-card');
    }
}
