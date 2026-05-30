<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        #validate Request Data
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);

        #Auth Attemp
        $result = Auth::attempt($request->all(), 1);

        dd($result);
        dd($request->all());
    }

    #Register Logic
    public function register(Request $request)
    {

        #Register validate
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'type' => 'required|in:user,author'

        ]);



    }
}
