<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Equip extends Component
{
    public function __construct(
        public string $nom,
        public string $estadi,
        public int $titols) {}

    public function render()
    {
        return view('components.equip');
    }
}
