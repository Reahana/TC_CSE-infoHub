<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Incourse;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    public function index()
    {    $this->students =Student::where('roll',Auth::user()->roll)->get();
        $this->student = Student::where('roll','=',Auth::user()->roll)->first();
        $this->courses =Course::where('semester', $this->student->semester)->get();
        $this->incourses = Incourse::where('roll',$this->student->roll)->select('*')->get();

        return view('front.student.result.result',[
            'students'=>$this->students,
            'courses'=>$this->courses,
            'incourses'=>$this->incourses
        ]);
    }
}
