<?php

namespace App\Http\Controllers;

use App\Models\GuideTeacher;
use App\Models\Semester;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GuideTeacherController extends Controller
{
    private $teachers;
    private $guideTeacher;
    private $semesters;
    public function index()
    {
        $this->teachers = Teacher::all();
        $this->semesters = Semester::all();
        return view('admin.teacher.addGuideTeacher',[
            'teachers'=>$this->teachers,
            'semesters'=>$this->semesters
            ]);
    }
    public function getGuideTeacher()
    {
        $this->teachers= Teacher::where('t_id',$_GET['id'])->get();
        return json_encode($this->teachers);
    }
    public function getAsstGuideTeacher()
    {
        $this->teachers= Teacher::where('t_id',$_GET['id'])->get();
        return json_encode($this->teachers);
    }
    public function create(Request $request)
    {
        GuideTeacher::newGuideTeacher($request);

        return redirect()->back()->with('message', 'Guide Teacher  add successfully');
    }

    public function manage()
    {

        $this->teachers = GuideTeacher::orderBy('semester')->get();
        return view('admin.teacher.manageGuideTeacher', ['teachers' => $this->teachers]);
    }
    public function edit($id)
    {

        $this->guideTeacher = GuideTeacher::find($id);
        $this->semesters = Semester::all();
        $this->teachers =Teacher::all();

        return view('admin.teacher.editGuideTeacher', [
            'guideTeacher'=>$this->guideTeacher,
            'teachers' => $this->teachers  ,
            'semesters'=>$this->semesters,


        ]);
    }
    public function update(Request $request, $id)
    {
        GuideTeacher::updateGuideTeacher($request, $id);

        return redirect('/manage-guide-teacher')->with('message', 'Guide Teacher info update successfully');
    }

    public function delete(Request $request, $id)
    {
       GuideTeacher::deleteGuideTeacher($id);
        return redirect('/manage-guide-teacher')->with('message', 'Guide Teacher info delete successfully');
    }


}
