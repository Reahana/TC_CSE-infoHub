<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AttendanceStudentController extends Controller
{
    public function index()
    {    $this->students =Student::where('roll',Auth::user()->roll)->get();
        $this->student = Student::where('roll','=',Auth::user()->roll)->first();
        $this->courses =Course::where('semester', $this->student->semester)->get();
        $this->attendances = Attendance::where('roll',$this->student->roll)->select('*')->get();

        return view('front.student.attendance.attendance',[
            'students'=>$this->students,
            'courses'=>$this->courses,
            'attendances'=>$this->attendances
        ]);
    }
}
