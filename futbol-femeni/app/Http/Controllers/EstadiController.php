<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstadiController extends Controller
{
    public function index()
    {
        $estadis = ['Camp Nou',];
        return view('estadi.index', compact('estadis'));
    }
}
