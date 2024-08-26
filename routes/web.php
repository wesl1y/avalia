<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function(){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'auth')->name('login.auth');
    Route::get('/logout', 'destroy')->name('login.destroy');
});
