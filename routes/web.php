<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FlashController;

Route::get('/flash', [FlashController::class, 'show']);