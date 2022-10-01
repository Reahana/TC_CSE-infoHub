<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Batch;

use App\Models\Incourse;
use App\Models\Semester;

use App\Models\Student;

use Illuminate\Http\Request;


class StudentController extends Controller
{

private $semesters;
private $batches;
private $student;
private $students;
private $incourse;
private $attendance;

// add form view
  public function index()
  {
     $this->semesters = Semester::all();
     $this->batches = Batch::all();
     return view('admin.student.add', [
        'semesters' => $this->semesters,
        'batches' => $this->batches
     ]);
   }

 //for session selection
    public function getSession()
    {
        $this->batches= Batch::where('batch',$_GET['id'])->get();
        return json_encode($this->batches);
    }

    //for session selection
    public function getSemester()
    {
        $this->batches= Batch::where('batch',$_GET['id'])->get();
        return json_encode($this->batches);
    }

    // Create new student
    public function create(Request $request)
    {
        Student::newStudent($request);
       Incourse::newIncourse($request);
       Attendance::newAttendance($request);
        return redirect()->back()->with('message', 'Student info create successfully');
    }

  
// Manage function

    public function manage()
    {
      return view('admin.student.manage');
    }


    public function manageBasic()
    {
        $this->students = Student::orderBy('semester')->orderBy('section')->orderBy('roll')->get();
        return view('admin.student.manageBasic',
        ['students' => $this->students]);
    }


    public function manageAcademic()
    {     $this->students = Student::orderBy('semester')->orderBy('section')->orderBy('roll')->get();

        return view('admin.student.manageAcademic', ['students' => $this->students]);
    }


    public function manageContact()
    {
         $this->students = Student::orderBy('id','desc')->get();
          return view('admin.student.manageContact',
            ['students' => $this->students]);
    }

 
// ====== Edit function
    public function editBasic($id)
    {
       $this->student = Student::find($id);
       $this->semesters = Semester::all();
       $this->batches = Batch::all();
        return view('admin.student.editBasic', [
            'student' => $this->student,
            'semesters' => $this->semesters,
            'batches' => $this->batches
        ]);
    }


    public function editAcademic($id)
    {
        $this->student = Student::find($id);
        $this->semesters = Semester::all();
        $this->batches = Batch::all();
        return view('admin.student.editAcademic', [
            'student' => $this->student,
            'semesters' => $this->semesters,
            'batches' => $this->batches
        ]);
    }

  

    public function editContact($id)
    {
       $this->student = Student::find($id);
       $this->semesters = Semester::all();
       $this->batches = Batch::all();
       return view('admin.student.editContact', [
           'student' => $this->student,
           'semesters' => $this->semesters,
            'batches' => $this->batches
       ]);
    }

//==========update functions
    public function updateBasic(Request $request, $id)
    {
        Student::updateStudentBasic($request, $id);
        return redirect('/manage-basic-student')->with('message', 'Student info update successfully');
    }


    public function updateAcademic(Request $request, $id)
    {
        Student::updateStudentAcademic($request, $id);
        return redirect('/manage-academic-student')->with('message', 'Student info update successfully');
    }


    public function updateContact(Request $request, $id)
    {
        Student::updateStudentContact($request, $id);
        return redirect('/manage-contact-student')->with('message', 'Student info update successfully');
    }

    //====== Delete Function
    public function delete(Request $request, $id)
    {
        Student::deleteStudent($id);
        return redirect('/manage-student')->with('message', 'Student info delete successfully');
    }




}
