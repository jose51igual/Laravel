<?php

namespace App\Http\Controllers;

class JugadoresController extends Controller
{
    public $jugadores = [
        ['id' => 1, 'nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posicio' => 'Migcampista'],
        ['id' => 2, 'nom' => 'Esther González', 'equip' => 'Atlètic de Madrid', 'posicio' => 'Davantera'],
        ['id' => 3, 'nom' => 'Misa Rodríguez', 'equip' => 'Real Madrid Femení', 'posicio' => 'Portera'],
    ];

    public function index()
    {
        $jugadores = $this->jugadores;

        return view('jugadores.index', compact('jugadores'));
    }

    public function show($key)
    {
        $jugadora = $this->jugadores[$key];

        return view('jugadores.show', compact('jugadora'));
    }
}
