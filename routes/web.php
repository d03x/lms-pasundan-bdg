<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('admin')->group(base_path('routes/admin.php'));
Route::prefix('portal')->group(base_path('routes/portal.php'));
Route::prefix('auth')->name('auth.')->group(base_path('routes/auth.php'));
