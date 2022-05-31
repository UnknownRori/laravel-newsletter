<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return inertia('Login');
    }

    public function auth(Request $request)
    {
        //
    }

    public function logout(Request $request)
    {
        //
    }
}
