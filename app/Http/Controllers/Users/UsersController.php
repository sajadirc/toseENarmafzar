<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    #list Of Usrs Here
    public function index(){
        $users = User::orderByDesc('created_at')->paginate(10);
        return view('panel.Users.all',compact('users'));
    }
}
