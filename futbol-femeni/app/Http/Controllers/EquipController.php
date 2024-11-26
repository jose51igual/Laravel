<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipController extends Controller
{
    public function index() {
        $equips = [
            ['nom' => 'Barça Femení', 'estadi' => 'Camp Nou', 'titols' => 30],
            ['nom' => 'Atlètic de Madrid', 'estadi' => 'Cívitas Metropolitano', 'titols' => 10],
            ['nom' => 'Real Madrid Femení', 'estadi' => 'Alfredo Di Stéfano', 'titols' => 5],
        ];
        return view('equips.index', compact('equips'));
     }
}
