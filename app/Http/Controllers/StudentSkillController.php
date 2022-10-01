<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentSkillController extends Controller
{
    private $students;
    public function index()
    {
        $this->students= Student::where('roll',Auth::user()->roll)->select('*')->get();

        return view('front.student.skill.addSkill',['students' => $this->students]);
    }
    public function addStudentSkill(Request $request,$id)
    {

        Student::addStudentSkill($request,$id);
        return redirect('/student-dashboard')->with('message', 'Student Skill add successfully');
    }
}
