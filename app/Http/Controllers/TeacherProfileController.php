<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherProfileController extends Controller
{
    private $teachers;

    public function index()
    {
        $this->teachers = Teacher::where('t_id',Auth::user()->t_id)
            ->orWhere('t_id',Auth::user()->g_id)->select('*')->get();
        return view('front.teacher.profile.edit',['teachers' => $this->teachers]);

    }
    public function view()
    {
        $this->teachers = Teacher::where('t_id',Auth::user()->t_id)
            ->orWhere('t_id',Auth::user()->g_id)->select('*')->get();

        return view('front.teacher.profile.view',[
            'teachers' => $this->teachers,

        ]);

    }


    public function updateTeacherProfile(Request $request, $id)
    {
        Teacher::updateTeacherSelf($request, $id);
        return redirect('/view-teacher-profile')->with('message', 'Teacher info update successfully');
    }
}
