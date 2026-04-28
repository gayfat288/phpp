<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ResponseController;

Route::get('/response', [ResponseController::class, 'show']);