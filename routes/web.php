<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CookiesController;

Route::get('/cookies', [CookiesController::class, 'show']);