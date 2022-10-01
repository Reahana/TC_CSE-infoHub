<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    public static $donor;

    public static function newDonor($request)
    {
        self::$donor = new Donor();
        self::$donor->donor_id = $request->donor_id;
        self::$donor->name = $request->name;
        self::$donor->contact = $request->contact;
        self::$donor->address = $request->address;
        self::$donor->blood = $request->blood;
        self::$donor->status =$request->status;
        self::$donor->save();

    }

    public static function updateDonor($request, $id)
    {
        self::$donor = Donor::find($id);

//        self::$donor->donor_id = $request->donor_id;
//        self::$donor->name = $request->name;
        self::$donor->contact = $request->contact;
        self::$donor->address = $request->address;
        self::$donor->blood = $request->blood;
        self::$donor->status =$request->status;
        self::$donor->save();
    }

    public  static function deleteDonor($id){

        self::$donor = Donor::find($id);

        self::$donor->delete();

    }

    public  function  user ()
    {

        return $this->belongsTo('App\Models\User');
    }
}
