<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credenitals = $request->only('email', 'password');

        if (Auth::attempt($credenitals)) {
            return response(true);
        }

        return response(false, 301); 
    }

    public function logout()
    {
        Auth::logout();

        return response(true);
    }
}