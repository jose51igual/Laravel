<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;
use App\Http\Controllers\EstadiController;

Route::get('/', function () {
    return "Benvingut a la Guia d'Equips de Futbol Femení!";
});

Route::get('/equips', [EquipController::class, 'index']);

Route::get('/estadis', [EstadiController::class, 'index']);

Route::get('/estadis/create', [EstadiController::class, 'create']);
