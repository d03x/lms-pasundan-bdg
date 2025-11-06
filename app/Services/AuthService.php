<?php

namespace App\Services;

use App\Services\Contracts\AuthServiceInterface;

class AuthService implements AuthServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function test(): array
    {
        return [
            "WOORK"=>true
        ];
    }
}
