<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use app\Http\Controllers\UserController;
use App\Http\Controllers\BladeController;
use App\Http\Controllers\PostController;

Route::get('/blade', [BladeController::class, 'show']);
Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll'])->where($order, '=', 'id|date|title')->where($dir, '=', 'asc|desc');
Route::get('/post/{id}', [PostController::class, 'getOne'])->where($id, '=', '[0-9]+');
Route::match(['get', 'post'], '/post/new/{id}', 'PostController@newPost');
Route::get('/post/upd', [PostController::class, 'updatedPost']);