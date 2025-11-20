<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Contracts\AuthServiceInterface;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return inertia("auth/login");
    }

    public function checkLogin(Request $request, AuthServiceInterface $auth)
    {

        //validation

        $data = $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required']
        ]);

        if ($data && $auth->login($data)) {
            return to_route('portal.index');
        }
        return back()->withErrors(["email" => __('auth.failed')]);
    }
}
