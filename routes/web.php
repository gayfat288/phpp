<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\RedirectController;

Route::get('/redirect', [RedirectController::class, 'show']);
Route::get('/redirect/result', [RedirectController::class, 'result'])->name('goshan');
