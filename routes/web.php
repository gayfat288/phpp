<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FormController;
use App\Http\Controllers\MethodController;

Route::get('/form', [FormController::class, 'form']);
Route::get('/form/result', [FormController::class, 'result']);

Route::get('/test/method', [MethodController::class, 'show']);