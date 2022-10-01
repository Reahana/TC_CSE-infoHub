<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{

    public function index()
    {
        return view('front.password.changePasswordForm');
    }
    /**
     * Change the current password
     * @param Request $request
     * @return Renderable
     */
    public function changePassword(Request $request)
    {

       User::changePassword($request);
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|same:confirm_password|min:8',
            'confirm_password' => 'required',
        ]);



        return redirect()->back()->with('message','password successfully updated');
    }
}
