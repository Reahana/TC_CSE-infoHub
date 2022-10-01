<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\CourseTeacher;
use App\Models\Incourse;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestTeacherController extends Controller
{
    private $attendances ;
    private $teachers;
    private $teacher;
    private $incourses ;
    private $semesters ;
    private $semester ;
    private $courses ;
    private $course ;
    public function  index()
    {
        return view ('front.guest_teacher.attendance.home');
    }



    public function attend5SA()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','A')->get();

        $this->attendances =  Attendance::where('roll','like','10%')->where('section','A')
            ->select('*')->orderBy('roll')->get();

        $this->teacher = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','A')->first();
        return view ('front.attendance.5th_semester',[
            'teachers'=>$this->teachers,
            'attendances' =>  $this->attendances,
            'self'=>$this->teacher,


        ]);
    }
    public function attend5SB()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','B')->get();

        $this->teacher = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','B')->first();
        $this->attendances =  Attendance::where('roll','like','10%')->where('section','B')
            ->select('*')->orderBy('roll')->get();


        return view ('front.attendance.5th_semester',[

            'teachers'=>$this->teachers,
            'attendances' =>  $this->attendances,
            'self'=>$this->teacher,

        ]);
    }

    public function  home()
    {
        return view ('front.guest_teacher.incourse.home');
    }

    public function marks5SA()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','A')->get();

        $this->incourses = Incourse::where('section','A')->where('roll','like','10%')
            ->select('*')->orderBy('roll')->get();
        $this->teacher = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','A')->first();
        return view ('front.incourse.5th_semester',[
            'teachers'=>$this->teachers,
            'incourses' =>  $this->incourses,
            'self'=>$this->teacher,


        ]);
    }
    public function marks5SB()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','B')->get();

        $this->teacher = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',5)->where('section','B')->first();

        $this->incourses = Incourse::where('section','B')->where('roll','like','10%')->orderBy('roll')
            ->select('*')->get();

        return view ('front.incourse.5th_semester',[

            'teachers'=>$this->teachers,
            'incourses' =>  $this->incourses,
            'self'=>$this->teacher,

        ]);
    }
    public function note()
    {
        $this->teachers =Teacher::where('t_id',Auth::user()->g_id)->get('*');
        $this->courses = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->select('*')->get();
        $this->semesters = CourseTeacher::where('t_id',Auth::user()->g_id)
            ->orderBy('semester')->select('*')->get();
        $this->semester =  $this->semesters->unique('semester');

        return view('front.guest_teacher.note.add',[
            'courses' => $this->courses,
            'teachers' => $this->teachers,
            'semesters' => $this->semester,
        ]);
    }
    public function getCourseCode()
    {
        $this->courses= CourseTeacher::where('t_id',Auth::user()->g_id)
            ->where('semester',$_GET['id'])->get();
        $this->course =         $this->courses->unique('code');

        return json_encode($this->course);
    }
}
