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
        // $result = Auth::attepmt();
        $result = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ], 1);

        return redirect()->route('home')->with('success', 'خوش آمدید');
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


        $type = $request->type == 'author' ? 1 : 0;
        // dd($type);
        $result = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $type,
            'password' => $request->password,
        ]);

        Auth::login($result, 1);

        if ($result && $result->isAuthor())
            return redirect()->route('home')->with('success', 'نویسنده');

        if ($result && $result->isUser())
            return redirect()->route('home')->with('success', 'کاربر');

        if ($result && $result->isAdmin())
            return redirect()->route('home')->with('success', 'ادمین');
    }

    // logout func
    public function logout()
    {
        Auth::logout();

        session_reset();

        return back()->with('success', 'شما با موفقیت خارج شدید');
    }
}
