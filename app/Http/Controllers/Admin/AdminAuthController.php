<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminAuthController extends Controller
{
    public function login()
    {
        return view('admin.Auth.login');
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:8|max:25',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard.home')
                ->withSuccess('Signed in');
        }

        return redirect("admin/login")->withErrors('Login details are not valid');
    }

    public function signOut()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('dashboard.login');
    }


    // Forget Password
    public function getEmail()
    {
        return view('admin.Auth.forget');
    }

    public function postEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if ($admin) {
            $token = $this->generateRandomString(64);
            DB::table('admin_password_resets')->insert(
                ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
            );

            Mail::send('admin.auth.verify', ['token' => $token], function ($message) use ($request) {
                $message->to($request->email);
                $message->subject('Reset Password Notification');
            });
            return back()->with('success', __('We have e-mailed your password reset link!'));
        }

        return back()->with('error', __('Sorry! This email does not found'));
    }

    // Reset Password
    public function getPassword($token)
    {
        return view('admin.auth.reset', ['token' => $token]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('admin_password_resets')
            ->where(['email' => $request->email, 'token' => $request->token])
            ->first();

        if (!$updatePassword)
            return back()->withInput()->with('error', 'Invalid token!');

        $user = Admin::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);


        DB::table('admin_password_resets')->where(['email' => $request->email])->delete();

        return redirect()->route('dashboard.login')->with('message', __('Your password has been changed Successfully'));
    }


    protected function generateRandomString($length = 25)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
