<?php

namespace App\Http\Controllers;

class EquipController extends Controller
{
    public $equips = [
        ['id' => 1, 'nom' => 'Barça Femení', 'estadi' => 'Camp Nou', 'titols' => 30],
        ['id' => 2, 'nom' => 'Atlètic de Madrid', 'estadi' => 'Cívitas Metropolitano', 'titols' => 10],
        ['id' => 3, 'nom' => 'Real Madrid Femení', 'estadi' => 'Alfredo Di Stéfano', 'titols' => 5],
    ];

    public function index()
    {
        $equips = $this->equips;

        return view('equips.index', compact('equips'));
    }

    public function show($id)
    {
        $equip = $this->equips[$id];
        return view('equips.show', compact('equip'));
    }
}
