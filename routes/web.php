<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PostController;

Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll']);
Route::get('post/{id}', [PostController::class, 'getOne'])->where(['id' => '[0-9]+']);
Route::get('post/new', [PostController::class, 'newPost']);