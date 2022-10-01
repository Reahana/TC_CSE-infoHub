<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $users;
    private $students;
    private $teachers;
    private $admins;
    private $guest_teachers;
    public function index()
    {
       $this->users= Auth::user()->all();
        $this->admins = Auth::user()->where('role_id',0)->get('*');
       $this->students = Auth::user()->where('role_id',1)->orderBy('roll')->get('*');
        $this->teachers = Auth::user()->where('role_id',2)->orderBy('t_id')->get('*');
        $this->guest_teachers = Auth::user()->where('role_id',3)->orderBy('g_id')->get('*');
       return view('admin.user.view',[
           'users'=>$this->users,
           'admins'=>$this->admins,
           'students'=>$this->students,
           'teachers'=>$this->teachers,
           'guestTeachers'=>$this->guest_teachers
       ]);
    }

    public function delete(Request $request, $id)
    {
        User::deleteUser($id);
        return redirect()->back()->with('message', 'User Delete Successfully');
    }
}
