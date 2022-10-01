<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Semester;
use Illuminate\Http\Request;

class CourseController extends Controller
{
 
private $semesters;
private $course;
private $courses;

   public function index()
    {
 
$this->semesters = Semester::all();
        
return view('admin.course.add',['semesters' => $this->semesters]);

    
}



    public function create(Request $request)
    {
       
        Course::newCourse($request);
    return redirect()->back()->with('message', 'Course info create successfully');
   
    }

  





public function manage()
    {
     
 
   
 
$this->courses = Course::orderBy('semester')->get();
      

  return view('admin.course.manage',['courses' => $this->courses]);
    }



 public function edit($id)
    {
        
$this->course = Course::find($id);
    
$this->semesters = Semester::all();
 
      
  return view('admin.course.edit', [
            'course' => $this->course,
            'semesters'  => $this->semesters        ]);
    }

  

public function update(Request $request, $id)
    {
        Course::updateCourse($request, $id);
        return redirect('/manage-course')->with('message', 'Course info update successfully');
    }

   

 public function delete(Request $request, $id)
    {
        Course::deleteCourse($id);
        return redirect('/manage-course')->with('message', 'Course info delete successfully');
    }


}
