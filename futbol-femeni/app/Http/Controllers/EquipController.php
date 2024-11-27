<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EquipController extends Controller
{
    


    public function index() {
        $equips = [
            ['id' => 1, 'nom' => 'Barça Femení', 'estadi' => 'Camp Nou', 'titols' => 30],
            ['id' => 2,'nom' => 'Atlètic de Madrid', 'estadi' => 'Cívitas Metropolitano', 'titols' => 10],
            ['id' => 3,'nom' => 'Real Madrid Femení', 'estadi' => 'Alfredo Di Stéfano', 'titols' => 5],
        ];
        return view('equips.index', compact('equips'));
     }

     public function show($id) {
        $equips = [
            ['id' => 1, 'nom' => 'Barça Femení', 'estadi' => 'Camp Nou', 'titols' => 30],
            ['id' => 2,'nom' => 'Atlètic de Madrid', 'estadi' => 'Cívitas Metropolitano', 'titols' => 10],
            ['id' => 3,'nom' => 'Real Madrid Femení', 'estadi' => 'Alfredo Di Stéfano', 'titols' => 5],
        ];
        $equip = collect($equips)->firstWhere('id', $id);
        return view('equips.show', compact('equip'));
    }
}
