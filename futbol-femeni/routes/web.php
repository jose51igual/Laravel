<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipController;

Route::get('/', function () {
    return "Benvingut a la Guia d'Equips de Futbol Femení!";
});

Route::get('/equips', [EquipController::class, 'index']);
