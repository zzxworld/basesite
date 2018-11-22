<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function changePassword()
    {
        return view('user.change_password');
    }

    public function postChangePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'same:new_password',
        ]);

        $user = Auth::user();
        $password = Hash::make($request->input('old_password'));

        if (!Hash::check($user->password, $password)) {
            return 'wrong password.';
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        Auth::logout();
    }
}
