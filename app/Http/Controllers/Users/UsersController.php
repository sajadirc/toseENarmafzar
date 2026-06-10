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

        if($user)
            return redirect()->route('panel.users.index')->with('success','کاربر با موفقیت ساخته شد');
        return back()->with('failed','خطا در افزودن کاربر');
    }
}
