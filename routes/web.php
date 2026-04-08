<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use app\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdController;

Route::get('/messages', [MessageController::class, 'index']);
Route::post('/messages', [MessageController::class, 'store']);
Route::get('/admin/messages', [MessageController::class, 'index']);
Route::get('/admin/messages/delete/{id}', [MessageController::class, 'delete']);
Route::get('/ads', [AdController::class, 'categories']);
Route::get('/ads/{cat}', [AdController::class, 'show']);
Route::post('/ads', [AdController::class, 'store']);