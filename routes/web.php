<?php

use App\Http\Controllers\AbilityController;
use App\Http\Controllers\HeroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('heroes', HeroController::class);
Route::resource('abilities', AbilityController::class);

