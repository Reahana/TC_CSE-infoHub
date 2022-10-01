<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherDeskController extends Controller
{

    private $guestTeachers;
    private $teachers;
    public function index()
    {
        $this->teachers =Teacher::where('type','faculty')
        ->select('*')->orderBy('id')->get();
        $this->guestTeachers =Teacher::where('type','guest')
            ->select('*')->orderBy('id')->get();
        return view('front.teacher-desk.faculty' , [
            'teachers' => $this->teachers,
            'guestTeachers'=>$this->guestTeachers
        ]);

    }
}
