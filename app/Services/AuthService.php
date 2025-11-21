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
    public function getCurrentUserRole()
    {
        $user = Auth::user();

        if (! $user) {
            return null;
        }
        if (method_exists($user, 'getRoleNames')) {
            return $user->getRoleNames();
        }

        if (isset($user->role)) {
            return $user->role;
        }

        if (isset($user->roles)) {
            return $user->roles;
        }

        return null;
    }
}
