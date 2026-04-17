<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\SessionController;

Route::get('/session', [SessionController::class, 'show']);