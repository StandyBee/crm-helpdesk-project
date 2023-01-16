<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function users()
    {
        return User::get()->map(function (User $user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'role' => $user->role->name,
            ];
        });
    }

    public function user($id)
    {
        return User::find($id)->only('name', 'email');
    }
}
