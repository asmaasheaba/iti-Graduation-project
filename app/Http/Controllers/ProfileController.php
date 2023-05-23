<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\UpdateUserRequest;



class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->id());
        return view('profile.index', compact('user'));
    }

    public function edit()

    {
        $user = User::find(auth()->id());
        return view('profile.edit', compact('user'));
    }

    public function createPassword()
    {
        return view('profile.change_password');
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
        $currentPasswordStatus = Hash::check($request->current_password, auth()->user()->password);
        if ($currentPasswordStatus) {
            User::findOrFail(Auth::user()->id)->update([
                'password' => Hash::make($request->password),
            ]);
            return redirect()->back()->with('message', 'password Updated Sucessfully');
        } else {
            return redirect()->back()->with('message', 'current password does not match with old password');
        }
    }

    public function update(Request $request)
    {

        $request->validate([
            'image' => 'image|mimes:png,jpg,webp',
            'first_name' => ['string', 'max:255'],
            'last_name' => ['string', 'max:255'],
            'email' => ['string', 'email', 'max:255'],

        ]);

        $data = $request->except('image', 'password', '_token', '_method');

        if ($request->password) {
            $request->validate([
                'password' => ['string', 'min:8'],
            ]);

            $data['password'] =  bcrypt($request->password);
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('uploads/user/', $filename);
            $path = "uploads/user/$filename";

            $data['image'] = $path;
        }


        $user = User::find(auth()->user()->id);

        $user->update($data);

        // dd($request->all(), $user);


        return redirect()->back()->with('sucess', 'User profile updated successfully');
    }
}
