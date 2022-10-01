<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherBloodController extends Controller
{
    
  private $teachers;
public  function  index()
   {

       $this->teachers = Teacher::where('t_id',Auth::user()->t_id)->select('*')->get();
    return view('front.blood.teacher.addBG',['teachers' => $this->teachers]);
   }



public  function addTeacherBG(Request $request, $id)
   {
       Teacher::addTeacherBloodGroup($request,$id);
       return redirect('/blood-bank')->with('message', 'Teacher Blood Group  add successfully');

   }

    public function viewBloodList()
    {
        $this->teachers =Teacher::where('type','=','faculty')->orderBy('t_id')->get();
        return view('front.blood.teacher.bloodList',[
            'teachers' => $this->teachers
        ]);
    }


}
