<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;


public static $batch;





public static function newBatch($request)
{

	self::$batch = new Batch();

self::$batch->batch = $request->batch;
self::$batch->session = $request->session;
self::$batch->semester = $request->semester;
self::$batch->orientation = $request->orientation;
self::$batch->total_student = $request->total_student;
self::$batch->save();

}

 


public static function updateBatch($request, $id)
    {
  
  
    	self::$batch = Batch::find($id);

       
	
	
self::$batch->batch = $request->batch;

	
self::$batch->session = $request->session;
self::$batch->semester = $request->semester;


self::$batch->orientation = $request->orientation;


self::$batch->total_student = $request->total_student;




self::$batch->save();   }

 

public  static function deleteBatch($id){
   
  self::$batch = Batch::find($id);
   
  self::$batch->delete();

 }



public function semester ()
    {
    
    return $this->hasMany('App\Models\Semester');
    }



public function student ()
    {
    
    return $this->hasMany('App\Models\Student');
    }



public function course ()
    {
    
    return $this->hasMany('App\Models\Course');
    }




}
