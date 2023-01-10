<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function post()
    {
        return response()->json(['post' => 'ok'], 404);
    }
    
    public function put()
    {
        return response()->json(['put' => 'ok']);
    }

    public function any()
    {
        return response()->json(['any' => 'ok']);
    }

    public function html()
    {
        return response('current string', 404);
    }
}
