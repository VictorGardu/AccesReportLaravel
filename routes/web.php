<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view('inicio');
});

Route::get('/registro', [HomeController::class, 'register']);
