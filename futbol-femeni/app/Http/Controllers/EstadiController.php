<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadiController extends Controller
{
    public function index()
    {
        $estadis = [['nom' => 'Camp Nou', 'ciutat' => 'Barcelona', 'capacitat' => 99354],
                    ['nom' => 'Cívitas Metropolitano', 'ciutat' => 'Madrid', 'capacitat' => 68456],
                    ['nom' => 'Campo del madrid', 'ciutat' => 'Madrid', 'capacitat' => 60000],];
        return view('estadis.index', compact('estadis'));
    }

    public function create()
    {
        return view('estadis.create');
    }
}
