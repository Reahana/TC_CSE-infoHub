<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Incourse;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IncourseController extends Controller
{
    private $students;
    private $incourses;
    private $teachers;
    private $teacher;
    public function  index()
    {
        return view ('front.incourse.home');
    }


    public function create(Request $request)
    {
        Incourse::newIncourse($request);
        return redirect()->back()->with('message', 'Incourse marks added successfully');


    }

    public function update(Request $request, $id)
    {
        Incourse::updateIncourse($request, $id);

         return redirect()->back()->with('message', 'Incourse marks added successfully');
    }


    public function add5SA()
    {

        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)
            ->where('semester',5)
            ->where('section','A')->get();
        $this->students =Student::where('semester',5)
            ->where('section','A')
            ->orderBy('roll')->select('*')->orderBy('roll')->get();
       $this->teacher = CourseTeacher::where('t_id',Auth::user()->t_id)
           ->where('semester',5)->where('section','A')
            ->first();
            $this->incourses = Incourse::where('section','A')->where('roll','like','10%')
                ->select('*')->orderBy('roll')->get();
            return view ('front.incourse.5th_semester',[
                'students' => $this->students,
                'teachers'=>$this->teachers,
                'incourses'=>$this->incourses,
				'self'=>$this->teacher,

            ]);



    }
    public function add5SB()
    {

        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)
           ->where('semester',5)->where('section','B')->get();
        $this->students =Student::where('semester',5)
            ->where('section','B')->orderBy('roll')->select('*')->get();
       
			$this->teacher = CourseTeacher::where('t_id',Auth::user()->t_id)
                ->where('semester',5)->where('section','B')
            ->first();
        $this->incourses = Incourse::where('section','B')->where('roll','like','10%')->orderBy('roll')
            ->select('*')->get();
        return view ('front.incourse.5th_semester',[
            'students' => $this->students,
            'teachers'=>$this->teachers,
            'incourses'=>$this->incourses,
			'self'=>$this->teacher,
        ]);

    }

    public function view5S()
    {

        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)
            ->orWhere('t_id',Auth::user()->g_id)->where('semester',5)
            ->where('section','A')->get();
        $this->students =Student::where('semester',5)
            ->where('section','A')
            ->orderBy('roll')->select('*')->get();
        $this->incourses = Incourse::where('roll','like','10%')->select('*')->orderBy('roll')->get();
        return view ('front.incourse.view',[
            'students' => $this->students,
            'teachers'=>$this->teachers,
            'incourses'=>$this->incourses

        ]);

    }
//    public function add1SA()
//    {
//
//        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)->where('semester',1)
//            ->where('section','A')->get();
//        $this->students =Student::where('semester',1)
//            ->where('section','A')
//            ->orderBy('roll')->select('*')->get();
//        $this->incourses = Incourse::where('section','A')->where('roll','like','21%')
//            ->select('*')->get();
//        return view ('front.courses.1st_semester',[
//            'students' => $this->students,
//            'teachers'=>$this->teachers,
//            'incourses'=>$this->incourses
//
//        ]);
//
//    }
//    public function add1SB()
//    {
//
//        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)->where('semester',1)
//            ->where('section','B')->get();
//
//        $this->students =Student::where('semester',1)
//            ->where('section','B')
//            ->orderBy('roll')->select('*')->get();
//        $this->incourses = Incourse::where('section','B')->where('roll','like','21%')
//            ->select('*')->get();
//        return view ('front.courses.1st_semester',[
//            'students' => $this->students,
//            'teachers'=>$this->teachers,
//            'incourses'=>$this->incourses
//        ]);
//
//    }
}
