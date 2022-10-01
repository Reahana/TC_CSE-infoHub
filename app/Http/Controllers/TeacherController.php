<?php

namespace App\Http\Controllers;
use App\Models\Teacher;




use Illuminate\Http\Request;

class TeacherController extends Controller
{
 

private $teacher;
 
private $teachers;
   
public function index()
    {
        return view('admin.teacher.add');

    }

 public function create(Request $request)
    {
        Teacher::newTeacher($request);
        return redirect()->back()->with('message', 'Teacher info create successfully');
    }

  


  public function manage()
    {
   
          return view('admin.teacher.manage');
    }

 

  public function manageBasic()
    {
   
     $this->teachers = Teacher::orderBy('id')->get();
        return view('admin.teacher.manageBasic', ['teachers' => $this->teachers]);
    }

 

  public function manageContact()
    {
   
     $this->teachers = Teacher::orderBy('id')->get();
        return view('admin.teacher.manageContact', ['teachers' => $this->teachers]);
    }

 

 public function managePassword()
    {
   
     $this->teachers = Teacher::orderBy('id')->get();
        return view('admin.teacher.managePassword', ['teachers' => $this->teachers]);
    }

 

 
public function editBasic($id)
    {
     
   $this->teacher = Teacher::find($id);
     
return view('admin.teacher.editBasic', [
      
      'teacher' => $this->teacher   ]);
    }

  

public function editContact($id)
    {
     
   $this->teacher = Teacher::find($id);
     
return view('admin.teacher.editContact', [
            'teacher' => $this->teacher   ]);
    }

 



 


  public function updateBasic(Request $request, $id)
    {
        Teacher::updateTeacherBasic($request, $id);
        return redirect('/manage-basic-teacher')->with('message', 'Teacher info update successfully');
    }

   


 
  public function updateContact(Request $request, $id)
    {
        Teacher::updateTeacherContact($request, $id);
        return redirect('/manage-contact-teacher')->with('message', 'Teacher Contact info update successfully');
    }

 

  public function updatePassword(Request $request, $id)
    {
        Teacher::updateTeacherBloodGroup($request, $id);
        return redirect('/manage-password-teacher')->with('message', 'Teacher password update successfully');
    }

 

 public function delete(Request $request, $id)
    {
        Teacher::deleteTeacher($id);
        return redirect('/manage-teacher')->with('message', 'Teacher info delete successfully');
    }





}
