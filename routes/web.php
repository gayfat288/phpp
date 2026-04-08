<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use app\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\PostController;

Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);

// админка
Route::get('/admin/messages', [MessageController::class, 'index']);
Route::get('/admin/messages/delete/{id}', [MessageController::class, 'delete']);