<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Note;
use App\Models\Semester;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    private $courses;
    private $g_courses;
    private $course;
    private $notes;
    private $teachers;
    private $teacher;
    private $semesters;
    private $semester;
    public function index()
    {
        $this->teachers =Teacher::where('t_id',Auth::user()->t_id)->get('*');
        $this->courses = CourseTeacher::where('t_id',Auth::user()->t_id)
           ->select('*')->get();
        $this->semesters = CourseTeacher::where('t_id',Auth::user()->t_id)
            ->orderBy('semester')->select('*')->get();
      $this->semester =  $this->semesters->unique('semester');

        return view('front.teacher.Notes.addNote',[
            'courses' => $this->courses,
            'teachers' => $this->teachers,
            'semesters' => $this->semester,
        ]);
    }
    public function getCourseCode()
    {
        $this->courses= CourseTeacher::where('t_id',Auth::user()->t_id)
            ->where('semester',$_GET['id'])->get();
$this->course =         $this->courses->unique('code');

        return json_encode($this->course);
    }
    public function create(Request $request)
    {
        Note::newNote($request);
        return redirect()->back()->with('message', 'Note create successfully');
    }
    public function manage()
    {
        $this->notes =Note::orderBy('semester')->get();
        return view('front.teacher.Notes.manage',[
            'notes' => $this->notes   ]);
    }
    public function view()
    {
        $this->notes =Note::orderBy('semester')->get();
        return view('front.student.note.view',[
            'notes' => $this->notes   ]);
    }
    public function edit($id)
    {
        $this->note = Note::find($id);
        $this->teachers =Teacher::where('t_id',Auth::user()->t_id) ->orWhere('t_id',Auth::user()->g_id)->get('*');
        $this->teacher =CourseTeacher::where('t_id',Auth::user()->t_id) ->orWhere('t_id',Auth::user()->g_id)->first();
        $this->course = CourseTeacher::where('t_id',Auth::user()->t_id)
            ->orWhere('t_id',Auth::user()->g_id)->get();
        $this->semesters = Semester::where('name',$this->teacher->semester)
            ->select('name')->get();
        return view('front.teacher.Notes.edit', [
            'note' => $this->note  ,
        'courses' => $this->course,
            'teachers' => $this->teachers,
            'semesters' => $this->semesters,

        ]);
    }
    public function update(Request $request, $id)
    {
        Note::updateNote($request, $id);

        return redirect('/manage-note')->with('message', 'Note info update successfully');
    }
    public function delete(Request $request, $id)
    {
        Note::deleteNote($id);
        return redirect('/manage-note')->with('message', 'Note info delete successfully');
    }

}
