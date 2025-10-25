<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('login', 'login')->name('login');
Route::view('register', 'register')->name('register');
Route::get('logout', [AuthController::class,'logout'])->name('logout');
