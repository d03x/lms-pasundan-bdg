<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('login', LoginController::class)->name('login');
Route::post('login', [LoginController::class,'checkLogin'])->name('login.post');
