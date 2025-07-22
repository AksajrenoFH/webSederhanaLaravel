<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::resource('home', HomeController::class);

Route::resource('about', AboutController::class);

Route::resource('contact', ContactController::class);

Route::resource('siswa', SiswaController::class);