<?php

namespace App\Providers;

use App\PermissionsEnum;
use App\RoleEnum;
use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Intrfce\LaravelFrontendEnums\Facades\PublishEnums;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        PublishEnums::publish([
            RoleEnum::class,
            PermissionsEnum::class,
        ])->asTypescript()->toDirectory(resource_path('js/types'));
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
