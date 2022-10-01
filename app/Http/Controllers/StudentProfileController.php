<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Semester;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentProfileController extends Controller
{
    private $semesters;
    private $batches;
    private $student;
    private $students;

    public function index()
    {   $this->semesters = Semester::all();
        $this->batches = Batch::all();
        $this->students= Student::where('roll',Auth::user()->roll)->select('*')->get();
        return view('front.student.profile.edit',[
            'students' => $this->students,
            'semesters' => $this->semesters,
            'batches' => $this->batches]);
    }
    public function view()
    {
        $this->semesters = Semester::all();
        $this->batches = Batch::all();
        $this->students= Student::where('roll',Auth::user()->roll)->select('*')->get();
        return view('front.student.profile.view',[
            'students' => $this->students,
            'semesters' => $this->semesters,
            'batches' => $this->batches]);
    }
    public function updateStudentProfile(Request $request, $id)
    {
        Student::updateStudentSelf($request, $id);
        return redirect('/view-student-profile')->with('message', 'Student info update successfully');
    }

}
