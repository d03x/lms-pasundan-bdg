<?php

use App\Http\Middleware\AuthUserMiddleware;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('admin')->group(base_path('routes/admin.php'));
Route::prefix('portal')->middleware(AuthUserMiddleware::class)->group(base_path('routes/portal.php'));
Route::prefix('auth')->middleware('auth-user:guest')->name('auth.')->group(base_path('routes/auth.php'));
