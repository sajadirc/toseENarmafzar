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


    #Delete user Here
    public function destroy(int $id){
        #Find User
        $user = User::findOrFail($id);

        #delete User
        $result = $user->delete();

        #return Response
        if($result)
            return back()->with('success','کاربر با موفقیت حذف شد');
        return back()->with('failed','خطا در حذف کاربر');

    }

    #Add User View Here
    public function add(){
        return view('panel.Users.add');
    }

    // Store User func
    public function store(Request $request){
        $request->validate([
            'name'=> 'required|string',
            'email' => 'email|unique:users,email',
            'password' => 'required',
            'type' => 'required|in:0,1,2'
        ]);

        
        dd($request->all());
    }
}
