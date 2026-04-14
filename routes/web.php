<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\FormController;

Route::match(['get', 'post'], '/form', [FormController::class, 'form']);