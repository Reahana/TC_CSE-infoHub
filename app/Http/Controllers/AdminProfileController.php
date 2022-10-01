<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    private $admins;
    public function index()
    {

        $this->admins= User::where('id',Auth::user()->id)->select('*')->get();
        return view('admin.user.profile.adminViewProfile',[
            'admins' => $this->admins,

      ]);

    }
    public function updateProfile(Request $request)
    {
        User::updateUser($request);
        return redirect()->back()->with('message', 'Profile update successfully');
    }
}
