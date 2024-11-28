<?php

use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;
use App\Http\Controllers\JugadoresController;
use App\Http\Controllers\PartitsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Benvingut a la Guia d'Equips de Futbol Femení!";
});

Route::resource('equips', EquipController::class);

Route::resource('estadis', EstadiController::class);

Route::resource('jugadores', JugadoresController::class);

Route::resource('partits', PartitsController::class);
