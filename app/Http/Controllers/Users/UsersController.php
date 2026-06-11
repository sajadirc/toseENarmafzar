<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserInPanelRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    #list Of Usrs Here
    public function index()
    {
        $users = User::orderByDesc('created_at')->paginate(10);
        return view('panel.Users.all', compact('users'));
    }


    #Delete user Here
    public function destroy(int $id)
    {
        #Find User
        $user = User::findOrFail($id);

        #delete User
        $result = $user->delete();

        #return Response
        if ($result)
            return back()->with('success', 'کاربر با موفقیت حذف شد');
        return back()->with('failed', 'خطا در حذف کاربر');
    }

    #Add User View Here
    public function add()
    {
        return view('panel.Users.add');
    }

    // Store User func
    public function store(UserInPanelRequest $request)
    {


        $validated_data = $request->validated();


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->type,
            'is_verified' => true
        ]);

        if ($user)
            return redirect()->route('panel.users.index')->with('success', 'کاربر با موفقیت ساخته شد');
        return back()->with('failed', 'خطا در افزودن کاربر');
    }

    //Edit User Func
    public function edit(int $user_id, Request $request)
    {

        $user = User::findOrFail($user_id);
        return view('panel.Users.edit', compact('user'));
        // dd($user);
    }

    //update User Func
    public function update(int $user_id, Request $request)
    {

        #Find User
        $user = User::findOrFail($user_id);

        #vAlidate Request Data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable',
            'type' => 'required|in:0,1,2'
        ]);

        #upDate user info
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->password)
            $user->password = bcrypt($request->password);
        $user->type = $request->type;
        $result = $user->save();

        #return response
        if($result)
            return back()->with('success','ویرایش با موفقیت انجام شد');
        return back()->with('failed','خطا در ,dvhda کاربر');
    }
}
