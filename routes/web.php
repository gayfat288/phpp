<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use app\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\PostController;

Route::get('/post', [BladeController::class, 'show']);