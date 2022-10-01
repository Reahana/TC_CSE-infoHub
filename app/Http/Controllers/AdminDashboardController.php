<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Room;
use App\Models\Semester;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    private  $batch;
    private $semester;
    private $student;
    private $teacher;
    private $guestTeacher;
    private $course;
    private $class;
    private $ut;
    private $gt;
    private $us;
    private $admin;
    private $hardware;
    private $software;

    public function index()
    {
        $this->course =Course::count();
        $this->teacher = Teacher::where('type','faculty')->count();
        $this->guestTeacher= Teacher::where('type','guest')->count();
        $this->batch =Batch::count();
        $this->semester = Semester::count();
        $this->class =Room::where('room_type','class')->count();
        $this->hardware = Room::where('room_type','HL')->count();
        $this->software = Room::where('room_type','SL')->count();
        $this->student =Student::count();
        $this->ut = User::where('role_id',2)->count();
        $this->us = User::where('role_id',1)->count();
        $this->admin = User::where('role_id',0)->count();
        $this->gt = User::where('role_id',3)->count();
        return view('admin.home.home',[
            'semester'=>$this->semester,
            'batch' => $this->batch,
            'teacher' =>$this->teacher,
            'guestTeacher' =>$this->guestTeacher,
            'course'=>$this->course,
            'class'=> $this->class,
            'hardware'=> $this->hardware,
            'software'=> $this->software,
            'student'=>$this->student,
            'admin'=>$this->admin,
            'user_teacher'=>$this->ut,
            'guest_teacher'=>$this->gt,
            'user_student'=>$this->us,
        ]);

    }


}


