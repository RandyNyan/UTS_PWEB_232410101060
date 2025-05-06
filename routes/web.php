<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', [PageController::class, 'login']);
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
