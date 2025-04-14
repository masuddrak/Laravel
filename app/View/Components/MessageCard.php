<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MessageCard extends Component
{
    /**
     * Create a new component instance.
     */
    public $name;
    public $card;
    public function __construct($name,$card)
    {
        //
        $this->name=$name;
        $this->card=$card;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message-card');
    }
}
