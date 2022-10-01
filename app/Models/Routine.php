<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    use HasFactory;


public static $routine;





public static function newRoutine($request)
{

	self::$routine = new Routine();
 
	
self::$routine->day = $request->day;
self::$routine->batch = $request->batch;
self::$routine->semester = $request->semester;
self::$routine->section = $request->section;
self::$routine->t_8_50am = $request->t_8_50am;
self::$routine->t_9_40am = $request->t_9_40am;
self::$routine->t_10_30am = $request->t_10_30am;
self::$routine->t_11_20am = $request->t_11_20am;
self::$routine->t_12_10pm= $request->t_12_10pm;
self::$routine->t_1_30pm= $request->t_1_30pm;




self::$routine->save();

}

 


public static function updateRoutine($request, $id)
    {
  
  
    	self::$routine = Routine::find($id);



        self::$routine->day = $request->day;
        self::$routine->batch = $request->batch;
        self::$routine->semester = $request->semester;
        self::$routine->section = $request->section;
        self::$routine->t_8_50am = $request->t_8_50am;
        self::$routine->t_9_40am = $request->t_9_40am;
        self::$routine->t_10_30am = $request->t_10_30am;
        self::$routine->t_11_20am = $request->t_11_20am;
        self::$routine->t_12_10pm= $request->t_12_10pm;
        self::$routine->t_1_30pm= $request->t_1_30pm;




self::$routine->save();
    }

 

public  static function deleteRoutine($id){
   
  self::$routine = Routine::find($id);
   
  self::$routine->delete();

 }



public function semester ()
    {
    
    return $this->belongsTo('App\Models\Semester');
    }


}
