<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

public static $semester;


public static function newSemester($request)
{
	self::$semester = new Semester();
 
	self::$semester->name = $request->name;

	self::$semester->total_credit = $request->total_credit;

	self::$semester->total_course = $request->total_course;

	self::$semester->theory = $request->theory;

	self::$semester->practical = $request->practical;

	self::$semester->project = $request->project;

	self::$semester->save();

}

 public static function updateSemester($request, $id)
    {
    
    	self::$semester = Semester::find($id);

       
	self::$semester->name = $request->name;

	self::$semester->total_credit = $request->total_credit;

	self::$semester->total_course = $request->total_course;

	self::$semester->theory = $request->theory;

	self::$semester->practical = $request->practical;

	self::$semester->project = $request->project;

	self::$semester->save();

    }

 public  static function deleteSemester($id){
     self::$semester = Semester::find($id);
     self::$semester->delete();

 }



public function course()
    {
        return $this->hasMany('App\Models\Course');
    }



public function batch()
    {
        return $this->belongsTo('App\Models\Batch');
    }


public function routine()
    {
        return $this->hasMany('App\Models\Routine');
    }
    public function room()
    {
        return $this->hasMany('App\Models\Room');

    }

    public function student()
    {
        return $this->hasMany('App\Models\Student');

    }
}
