<?php

namespace App\Http\Controllers;
use App\Models\Batch;
use App\Models\Semester;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Room;
use App\Models\Course;
use App\Models\Routine;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoutineController extends Controller
{
    

private $semesters;
private $rooms;
private $batches;
private $teachers;
private $courses;
private $routine;
private $routines;

private $student;


public function index()
{
        $this->semesters = Semester::all();
        $this->batches = Batch::all();
        $this->teachers = Teacher::all();
        $this->courses = Course::all();
//        $this->rooms = Room::all();

        return view('admin.routine.add',[
        'semesters' => $this->semesters,
        'batches' => $this->batches,
        'teachers' => $this->teachers,
        'courses' => $this->courses,
//        'rooms' =>$this->rooms
       ]);
}

    public function getCourseCode()
    {
        $this->courses= Course::where('semester',$_GET['id'])->get();
        return json_encode($this->courses);
    }

    public function getCourseName()
    {
        $this->courses= Course::where('code',$_GET['id'])->get();
        return json_encode($this->courses);
    }
    public function getSemester()
    {
        $this->batches= Batch::where('batch',$_GET['id'])->get();
        return json_encode($this->batches);
    }



public function create(Request $request)
    {
  
      Routine::newRoutine($request);
    
   
return redirect()->back()->with('message', 'Routine info create successfully');
   
	
 }


public function manage()
    {
   
    
 $this->routines =  Routine::orderBy('id')->get();
     

  return view('admin.routine.manage',['routines' => $this->routines]);
  
  }
 public function edit($id)
 {    $this->routine = Routine::find($id);
     $this->semesters = Semester::all();
     $this->batches = Batch::all();
     $this->courses = Course::orderBy('code')->get('*');

     return view('admin.routine.edit',[
         'semesters' => $this->semesters,
         'batches' => $this->batches,
         'courses' => $this->courses,
        'routine' =>          $this->routine,

     ]);
 }
    public function update(Request $request, $id)
    {
        Routine::updateRoutine($request, $id);
        return redirect('/manage-routine')->with('message', 'Routine info update successfully');
    }


    public function delete(Request $request, $id)
    {
        Routine::deleteRoutine($id);
        return redirect('/manage-routine')->with('message', 'Routine info delete successfully');
    }

    public function view()
    {
        $this->student = Student::where('roll',Auth::user()->roll)->first();

                  $this->routines =Routine::where('semester', $this->student->semester)
           ->where('section', $this->student->section)
                      ->orderBy('id')
                      ->select('*')->get();

          return view('front.student.routine.routine',[
             'routines'=>$this->routines,
     ]);

    }

}
