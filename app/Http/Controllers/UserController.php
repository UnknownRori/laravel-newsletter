<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return inertia('Login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string', 'min:5'],
            'password' => ['required', 'string', 'min:4'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }

        session()->flash('error', 'Invalid user credentials');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
    }
}
