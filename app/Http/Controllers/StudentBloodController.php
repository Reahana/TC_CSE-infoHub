<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class StudentBloodController extends Controller
{
    

public  function index()
   {
       $this->students = Student::where('roll',Auth::user()->roll)->select('*')->get();


       return view('front.blood.student.addBG',[

           'students' => $this->students
       ]);

   }


    public function addStudentBG(Request $request,$id)
    {

        Student::addStudentBloodGroup($request,$id);
        return redirect('/blood-bank')->with('message', 'Student Blood Group  add successfully');
    }
    public function viewBloodList()
    {
        $this->students = Student::orderBy('semester')->orderBy('section')->orderBy('roll')->get();
        return view('front.blood.student.bloodList',[
            'students' => $this->students
        ]);
    }
}
