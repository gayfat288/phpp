<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use app\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\PostController;

Route::get('/blade', [BladeController::class, 'show']);
Route::match(['get', 'post'], '/post/new/{id}', 'PostController@newPost');
Route::get('/post/upd', [PostController::class, 'updatedPost']);
Route::get('/post/del/{id}', [PostController::class, 'delPost']);
Route::get('/post/deleted', [PostController::class, 'getDeletedPost']);