<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function edit(User $user)
    {
        return view('admin.users.edit',compact('user'));
    }

    public function delete(User $user)
    {
        $user->delete();
        return redirect()->back()->with('message','Deleted');
    }

    public function update(Request $request,User $user)
    {   
        $user->first_name =  $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->contact_method = $request->contact_method;
        $user->type = $request->type;
        $user->brief = $request->brief;
        // dd($user);
        $user->save();
        $users = User::all();
        return redirect()->route('admin.users.index')->with('message','Updated Successfully');
    }
}
