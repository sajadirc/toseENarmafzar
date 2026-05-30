<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    #login Index
    public function login_index()
    {
        return view('Auth.login');
    }

    #Register Index
    public function register_index()
    {
        return view('Auth.Register');
    }


    #login Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);
        dd($request->all());
    }
}
