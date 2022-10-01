<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestTeacherDashboardController extends Controller
{
    private $teachers;
    private $teacher;
    private $guides;
    private $courses;
    public function index()
    {
        $this->teachers =Teacher::where('t_id',Auth::user()->g_id)->get('*');
        $this->teacher = Teacher::where('t_id',Auth::user()->g_id)->first();
        $this->courses = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->select('*')
        ->get();

        return view ('front.guest_teacher.dashboard',[
            'teachers'=>$this->teachers,
            'courses'=>$this->courses,
        ]);
    }
}
