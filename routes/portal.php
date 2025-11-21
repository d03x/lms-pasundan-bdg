<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => inertia("Welcome"))->name('portal.index');
Route::get('materi', fn() => inertia('siswa/materi'))->name('portal.materi');
