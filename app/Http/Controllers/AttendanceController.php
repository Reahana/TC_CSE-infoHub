<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Course;
use App\Models\Student;
use App\Models\CourseTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    private $students;
    private $attendances ;
    private $teachers;
    private $teacher;
    private $guests;
    private $guest;

    public function  index()
    {
        return view ('front.attendance.home');
    }


    public function create(Request $request)
    {
        Attendance::newAttendance($request);

        return redirect()->back()->with('message', 'Attendance added successfully');


    }
    public function update(Request $request, $id)
    {
        Attendance::updateAttendance($request, $id);
        return redirect()->back()->with('message', 'Attendance added successfully');

    }



    public function add5SA()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)
            ->where('semester',5)->where('section','A')->get();
        $this->teacher = CourseTeacher::where('t_id',Auth::user()->t_id)
		            ->where('semester',5)->where('section','A')->first();
        $this->attendances =  Attendance::where('roll','like','10%')->where('section','A')
            ->select('*')->orderBy('roll')->get();
        return view ('front.attendance.5th_semester',[
            'students' => $this->students,
            'teachers'=>$this->teachers,
            'attendances' =>  $this->attendances,
            'self'=>$this->teacher,


        ]);
    }
    public function add5SB()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)
            ->where('semester',5)->where('section','B')->get();

        $this->teacher = CourseTeacher::where('t_id',Auth::user()->t_id)
		            ->where('semester',5)->where('section','B')->first();
        $this->attendances =  Attendance::where('roll','like','10%')->where('section','B')
            ->select('*')->orderBy('roll')->get();

        return view ('front.attendance.5th_semester',[
            'students' => $this->students,
            'teachers'=>$this->teachers,
            'attendances' =>  $this->attendances,
            'self'=>$this->teacher,

        ]);
    }





    public function view5S()
    {

        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)->where('semester',5)
            ->orWhere('t_id',Auth::user()->g_id) ->where('section','A')->get();
        $this->students =Student::where('semester',5)
            ->where('section','A')
            ->orderBy('roll')->select('*')->get();
        $this->attendances =  Attendance::where('roll','like','10%')->orderBy('roll')->select('*')->get();
        return view ('front.attendance.view5th',[
            'students' => $this->students,
            'teachers'=>$this->teachers,
            'attendances' =>  $this->attendances

        ]);

    }
}
