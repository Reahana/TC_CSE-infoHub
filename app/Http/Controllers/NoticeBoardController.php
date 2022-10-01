<?php

namespace App\Http\Controllers;

use App\Models\NoticeBoard;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoticeBoardController extends Controller
{
    private $notice;
    private $notices;
    private $teachers;

    // Admin add notice
    public function index()
    {
        return view('admin.notice_board.add');
    }

    // Teacher add notice
    public function add()
    {
        $this->teachers =Teacher::where('t_id',Auth::user()->t_id)
            ->orWhere('t_id',Auth::user()->g_id)->get('*');
        return view('front.teacher.notice_board.add',[
            'teachers' => $this->teachers   ]);
    }

    public function create(Request $request)
    {
        NoticeBoard::newNotice($request);
        return redirect()->back()->with('message', 'Notice create successfully');
    }

    public function manage()
    {
        $this->notices = NoticeBoard::orderBy('id','desc')->get();
        return view('admin.notice_board.manage',[
        'notices' => $this->notices   ]);
    }
//    public function manageByTeacher()
//    {
//        $this->notices = NoticeBoard::orderBy('id','desc')->get();
//        return view('front.teacher.note.manage',[
//            'notices' => $this->notices   ]);
//    }

    public function edit($id)
    {
        $this->notice = NoticeBoard::find($id);
        return view('admin.notice_board.edit', [
            'notice' => $this->notice   ]);
    }
    public function editByTeacher($id)
    {
        $this->notice = NoticeBoard::find($id);
        return view('front.teacher.notice_board.edit', [
            'notice' => $this->notice   ]);
    }

    public function update(Request $request, $id)
    {
        NoticeBoard::updateNotice($request, $id);
        return redirect('/manage-notice')->with('message', 'Notice Board update successfully');
    }

    public function updateByTeacher(Request $request, $id)
    {
        NoticeBoard::updateNotice($request, $id);
        return redirect('/view-notice')->with('message', 'Notice Board update successfully');
    }

    public function delete(Request $request, $id)
    {
        NoticeBoard::deleteNotice($id);

        return redirect()->back()->with('message', 'Notice Board  delete successfully');
    }

    public function view()
    {
        $this->notices = NoticeBoard::orderBy('id','desc')->get();
        return view('front.notice_board.view',[
            'notices' => $this->notices ,
            ]);
    }

}
