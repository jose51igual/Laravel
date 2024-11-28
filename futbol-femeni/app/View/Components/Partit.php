<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Partit extends Component
{
    public string $local;
    public string $visitant;
    public string $data;
    public ?string $resultat;

    /**
     * Create a new component instance.
     */
    public function __construct(string $local, string $visitant, string $data, ?string $resultat = '')
    {
        $this->local = $local;
        $this->visitant = $visitant;
        $this->data = $data;
        $this->resultat = $resultat;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.partit');
    }
}
