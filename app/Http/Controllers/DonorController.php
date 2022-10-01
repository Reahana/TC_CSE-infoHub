<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonorController extends Controller
{
   private $donors;

public  function  donorABPos()
   {
    $this->donors =Donor::where('blood','AB+')->get();
    return view('front.blood.donor.viewdonor',[
        'donors'=>$this->donors
    ] );
   }


public  function  donorABNeg()
   {
    $this->donors =Donor::where('blood','AB-')->get();
    return view('front.blood.donor.viewdonor' ,[
        'donors'=>$this->donors
    ]);
   }


public  function  donorAPos()
   {
    $this->donors =Donor::where('blood','A+')->get();
    return view('front.blood.donor.viewdonor', [
        'donors'=>$this->donors
    ] );
   }


public  function  donorANeg()
   {
    $this->donors =Donor::where('blood','A-')->get();
    return view('front.blood.donor.viewdonor' ,[
    'donors'=>$this->donors
    ]);
   }


public  function  donorBPos()
   {
    $this->donors =Donor::where('blood','B+')->get();
    return view('front.blood.donor.viewdonor',[
        'donors'=>$this->donors
    ] );
   }


public  function  donorBNeg()
   {
       $this->donors =Donor::where('blood','B-')->get();
    return view('front.blood.donor.viewdonor' ,[
        'donors'=>$this->donors
    ]);
   }


public  function  donorOPos()
   {
       $this->donors =Donor::where('blood','O+')->get();
    return view('front.blood.donor.viewdonor' ,[
        'donors'=>$this->donors
    ]);
   }


public  function  donorONeg()
   {
       $this->donors =Donor::where('blood','O-')->get();
    return view('front.blood.donor.viewdonor',[
        'donors'=>$this->donors
    ] );
   }

    public function edit()
    {
        $this->donors= Donor::where('donor_id',Auth::user()->roll)
            ->orWhere('donor_id',Auth::user()->t_id)->select('*')->get();


        return view('front.blood.donor.edit', ['donors' => $this->donors]);
    }

    public function update(Request $request, $id)
    {
        Donor::updateDonor($request, $id);

        return redirect('/blood-bank')->with('message', 'Donor info update successfully');
    }





    public function delete(Request $request, $id)
    {
        Donor::deleteDonor($id);

        return redirect('/blood-bank')->with('message', 'Donor info delete successfully');
    }

 }
