<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return inertia('Login');
    }

    public function auth(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) return redirect('/');

        session()->flash('error', 'Invalid user credentials');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        return redirect('/auth/login');
    }
}
