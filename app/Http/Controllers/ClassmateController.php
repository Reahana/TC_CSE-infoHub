<?php

namespace App\Http\Controllers;

use App\Http\Middleware\StudentMiddleware;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassmateController extends Controller
{
    private $students;
    private $student;
    private $classmates;

    public function index()
    {

       $this->student = Student::where('roll','=',Auth::user()->roll)->first();
        $this->students = Student::where('batch', $this->student->batch)
            ->orderBy('roll')
           ->get();
        return view('front.student.classmate.classmate',[

            'students'=> $this->students
            ]);
    }
}
