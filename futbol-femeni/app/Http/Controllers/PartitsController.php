<?php

namespace App\Http\Controllers;

class PartitsController extends Controller
{
    public $partits = [
        ['local' => 'Barça Femení', 'visitant' => 'Atlètic de Madrid', 'data' => '2024-11-30', 'resultat' => null],
        ['local' => 'Real Madrid Femení', 'visitant' => 'Barça Femení', 'data' => '2024-12-15', 'resultat' => '0-3'],
    ];

    public function index()
    {
        $partits = $this->partits;

        return view('partits.index', compact('partits'));
    }

    public function show($key)
    {
        $partit = $this->partits[$key];
        return view('partits.show', compact('partit'));
    }
}
