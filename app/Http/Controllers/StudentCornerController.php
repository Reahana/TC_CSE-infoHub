<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentCornerController extends Controller
{
    private $students;
    private $student;





    public function nineBatchA()
    {

        $this->students = Student::where('batch',9)->where('section','A')->select('*')->orderBy('roll')->get();

        return view('front.student-corner.students',[
            'students'=>$this->students,

        ]);
    }

    public function nineBatchB()
    {
        $this->students = Student::where('batch',9)->where('section','B')->select('*')->orderBy('roll')->get();

        return view('front.student-corner.students',[
            'students'=>$this->students,

        ]);
    }


    public function tenBatchA()
    {
        $this->students = Student::where('batch',10)->where('section','A')->select('*')->orderBy('roll')->get();
        return view('front.student-corner.students',[
            'students'=>$this->students,

        ]);
    }

    public function tenBatchB()
    {
        $this->students = Student::where('batch',10)->where('section','B')->select('*')->orderBy('roll')->get();
       return view('front.student-corner.students', [
            'students' => $this->students,

        ]);

    }

    public function elevenBatchA()
    {
        $this->students = Student::where('batch',11)->where('section','A')->select('*')->orderBy('roll')->get();
        return view('front.student-corner.students',[
            'students'=>$this->students,

        ]);
    }

    public function elevenBatchB()
    {
        $this->students = Student::where('batch',11)->where('section','B')->select('*')->orderBy('roll')->get();
        return view('front.student-corner.students',[
            'students'=>$this->students,

        ]);
    }


    public function twelveBatchA()
    {
        $this->students = Student::where('batch',12)->where('section','A')->select('*')->orderBy('roll')->get();
        return view('front.student-corner.students',[
            'students'=>$this->students,

        ]);
    }

    public function twelveBatchB()
    {
        $this->students = Student::where('batch',12)->where('section','B')->select('*')->orderBy('roll')->get();
        return view('front.student-corner.students',[
            'students'=>$this->students,

        ]);
    }
    public function studentView($id)
    {
        $this->student= Student::find($id);
        return view('front.student-corner.studentInfo',[
            'student'=>$this->student,

        ]);
    }
}
