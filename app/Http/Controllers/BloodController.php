<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BloodController extends Controller
{
    private $students;
    private $teachers;
    private $donors;
    private $donor;
    public  function  index()
    { $this->donors = Donor::where('donor_id',Auth::user()->roll)
        ->orWhere('donor_id',Auth::user()->t_id)
        ->select('*')
        ->get();

        return view('front.blood.home' ,[
            'donors'=>$this->donors
        ]);
    }

    public function donor()
    {
        $this->students= Student::where('roll',Auth::user()->roll)
            ->select('*')
            ->get();
        $this->teachers= Teacher::where('t_id',Auth::user()->t_id)
            ->select('*')
            ->get();
        $this->donors = Donor::where('donor_id',Auth::user()->roll)
            ->orWhere('donor_id',Auth::user()->t_id)
            ->select('*')
            ->get();
        return view('front.blood.registration',[
            'donors' => $this->donors,
            'students' => $this->students,
            'teachers' => $this->teachers]);

    }

    public  function create(Request $request)

    {
        Donor::newDonor($request);
        return redirect('/blood-bank')->with('message', 'donor  create successfully');

    }






////others/////////

//    public  function studentReg()
//   {
//
//    return view('front.blood.student.resgister' );
//   }
//
//
//public  function  teacherReg()
//   {
//
//    return view('front.blood.teacher.resgister' );
//   }








}
