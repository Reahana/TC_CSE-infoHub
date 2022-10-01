<?php

namespace App\Http\Controllers;

use App\Models\CourseTeacher;
use App\Models\GuideTeacher;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TeacherDashboardController extends Controller
{
    private $teachers;
    private $teacher;
    private $guides;

    public function index()
    {
        $this->teachers = Teacher::where('t_id',Auth::user()->t_id)->get('*');
        $this->teacher = Teacher::where('t_id',Auth::user()->t_id)->first();
        
        $this->guides = GuideTeacher::where('g_t_id',$this->teacher->t_id)
            ->orWhere('ag_t_id',$this->teacher->t_id)
            ->select('semester')
            ->get();

        return view ('front.teacher.dashboard',[
            'teachers'=>$this->teachers,
            'guides' => $this->guides
        ]);
    }
}
