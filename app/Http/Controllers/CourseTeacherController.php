<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Semester;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseTeacherController extends Controller
{
    private $semesters;
    private $courses;
    private $teachers;
    private $teacher;
    public function index()
    {
        $this->semesters=Semester::all();
        $this->courses = Course::all();
        $this->teachers = Teacher::all();
        return view('admin.course_teacher.add',[
            'semesters'=>$this->semesters,
            'courses' =>$this->courses,
            'teachers'=>$this->teachers
        ]);
    }
    public function getCourseTeacher()
    {
        $this->teachers=Teacher::where('t_id',$_GET['id'])->get();
        return json_encode($this->teachers);
    }
   public function create(Request $request)
    {
        CourseTeacher::newCourseTeacher($request);
        return redirect()->back()->with('message', 'Course Teacher info create successfully');
    }
    public function manage()
    {

        $this->teachers = CourseTeacher::orderBy('semester')->orderBy('section')->orderBy('code')->get();
        return view('admin.course_teacher.manage',['teachers'=>$this->teachers]);
    }


    public function edit($id)
    {
        $this->teacher= CourseTeacher::find($id);

        $this->semesters=Semester::all();
        $this->courses = Course::all();
        $this->teachers = Teacher::all();


        return view('admin.course_teacher.edit', [
            'courses' => $this->courses,
            'semesters'  => $this->semesters   ,
            'teachers'=>$this->teachers,
            'teacher'=>$this->teacher,
        ]);
    }



    public function update(Request $request, $id)
    {
       CourseTeacher::updateCourseTeacher($request,$id);
        return redirect('/manage-course-teacher')->with('message', 'Course Teacher info update successfully');
    }



    public function delete(Request $request, $id)
    {
        CourseTeacher::deleteCourseTeacher($id);
        return redirect('/manage-course-teacher')->with('message', 'Course Teacher info delete successfully');
    }

	public function view1S()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)->where('semester',1)->get();
        return view('front.teacher.courses.1st_semester.view',[
            'teachers'=>$this->teachers
        ]);
    }
//	public function view3S()
//    {
//        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)->where('semester',3)->get();
//        return view('front.teacher.courses.3rd_semester.view',[
//            'teachers'=>$this->teachers
//        ]);
//    }
    public function view5S()
    {
        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)->where('semester',5)->get();
        return view('front.teacher.courses.5th_semester.view',[
            'teachers'=>$this->teachers
        ]);
    }
//	public function view6S()
//    {
//        $this->teachers = CourseTeacher::where('t_id',Auth::user()->t_id)->where('semester',6)->get();
//        return view('front.teacher.courses.6th_semester.view',[
//            'teachers'=>$this->teachers
//        ]);
//    }
}
