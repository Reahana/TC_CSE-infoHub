<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\TeacherRoutine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherRoutineController extends Controller
{
    private $teachers;
    private $routines;
    private $routine;
    private $courses;
    public function index()
    {

        $this->teachers = Teacher::all();


        return view('admin.routine.teachers.add',[

            'teachers' => $this->teachers,

        ]);
    }
    public function create(Request $request)
    {

        TeacherRoutine::newTeacherRoutine($request);


        return redirect()->back()->with('message', 'Routine info create successfully');


    }
    public function manage()
    {


        $this->routines =  TeacherRoutine::orderBy('id')->get();


        return view('admin.routine.teachers.manage',['routines' => $this->routines]);

    }

    public function edit($id)
    {    $this->routine = TeacherRoutine::find($id);
        $this->teachers = Teacher::all();
        $this->courses = Course::orderBy('code')->get('*');

        return view('admin.routine.teachers.edit',[
            'teachers' => $this->teachers,
            'courses' => $this->courses,

            'routine' =>          $this->routine,

        ]);
    }
    public function update(Request $request, $id)
    {
        TeacherRoutine::updateTeacherRoutine($request, $id);

        return redirect('/manage-teacher-routine')->with('message', ' Teacher Routine info update successfully');
    }


    public function delete(Request $request, $id)
    {
        TeacherRoutine::deleteTeacherRoutine($id);

        return redirect('/manage-teacher-routine')->with('message', ' Teacher Routine info delete successfully');
    }
    public function view()
    {


        $this->routines =TeacherRoutine::where('t_id', Auth::user()->t_id)
            ->orderBy('id')
            ->select('*')->get();

        return view('front.teacher.routine.routine',[
            'routines'=>$this->routines,
        ]);

    }

}
