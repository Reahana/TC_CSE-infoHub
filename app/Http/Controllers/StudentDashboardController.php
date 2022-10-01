<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use App\Models\GuideTeacher;
use App\Models\Room;
use App\Models\Semester;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentDashboardController extends Controller
{
    private $student;
    private $students;
    private $courses;
    private $rooms;
    private $guideTeacher;
    private $asstGuideTeacher;
    private $myself;


    public function index()
    {

        $this->students =Student::where('roll',Auth::user()->roll)->get();
        $this->student = Student::where('roll','=',Auth::user()->roll)->first();
        $this->rooms = Room::where('semester', $this->student->semester)
            ->where('section',$this->student->section)->get();
        $this->courses = CourseTeacher::where('semester', $this->student->semester)
            ->where('section',$this->student->section)->get();
		$this->asstGuideTeacher = GuideTeacher::join('teachers','teachers.t_id','=','guide_teachers.ag_t_id')
		->where('semester', $this->student->semester)->get();
        $this->guideTeacher=GuideTeacher::join('teachers','teachers.t_id','=','guide_teachers.g_t_id')
			->where('semester', $this->student->semester)->get();

        return view('front.student.dashboard', [
            'students' => $this->students,
            'courses'=> $this->courses,
            'rooms'=> $this->rooms,
            'guideTeachers'=>$this->guideTeacher,
			'asstGuideTeachers'=>$this->asstGuideTeacher,

        ]);
    }

}
