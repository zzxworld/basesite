<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Hash;
use Validator;
use Log;

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
        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_new_password' => 'same:new_password',
        ]);

        $user = Auth::user();

        $validator->after(function ($validator) use ($user, $request) {
            if (!Hash::check($request->input('old_password'), $user->password)) {
                $validator->errors()->add('old_password', 'wrong old password');
            }
        });

        if ($validator->fails()) {
            return redirect('user/change_password')
                ->withErrors($validator)
                ->withInput();
        }

        $user->password = Hash::make($request->input('new_password'));
        $user->save();

        Auth::logout();

        return redirect('login');
    }
}
