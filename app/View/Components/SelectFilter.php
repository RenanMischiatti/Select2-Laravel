<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SelectFilter extends Component
{

    protected $function;
    /**
     * Create a new component instance.
     */
    public function __construct($function)
    {
        $this->function = $function;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $route = route('query', ['function' => $this->function]);

        return view('components.select-filter', compact('route'));
    }
}
