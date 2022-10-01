<?php

namespace App\Http\Controllers;


use App\Models\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
   
private $semesters;
    private $semester;

 

public function index()
    {
    
    return view('admin.semester.add');

    }



public function create(Request $request)
    {
        Semester::newSemester($request);
       
return redirect()->back()->with('message', 'Semester info create successfully');
   
	
 }

   
 

public function manage()
    {
       
 $this->semesters = Semester::orderBy('id')->get();
      
  return view('admin.semester.manage',['semesters' => $this->semesters]);
    }

 

 
  
public function edit($id)
    {
      
 $this->semester = Semester::find($id);
       
 return view('admin.semester.edit', ['semester' => $this->semester]);
    }

   

 

public function update(Request $request, $id)
    {
      Semester::updateSemester($request, $id);
      return redirect('/manage-semester')->with('message', 'Semester info update successfully');
    }

  



  public function delete(Request $request, $id)
    {
        Semester::deleteSemester($id);
        return redirect('/manage-semester')->with('message', 'Semester info delete successfully');
    }



}



