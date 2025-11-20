<?php

namespace App\Services;

use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Support\Facades\Auth;

class AuthService implements AuthServiceInterface
{
    /**
     * Create a new class instance.
     */
    public function login(array $data): bool
    {
        return Auth::attempt($data, true);
    }
}
