<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormRetraite extends Component
{
    public $retraite;
    public $emsList;

    /**
     * Create a new component instance.
     */
    public function __construct($retraite,$EmsList)
    {
        $this->retraite = $retraite;
        $this->emsList = $emsList;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.retraite');
    }
}
