<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'form']);
Route::get('/form/result/{name}', [FormController::class, 'result']);