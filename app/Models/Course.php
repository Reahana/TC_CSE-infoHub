<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;



public static $course;

public static function newCourse($request)
{

self::$course = new Course();

self::$course->semester = $request->semester;
self::$course->code = $request->code;
self::$course->course_name = $request->course_name;
self::$course->credit = $request->credit;
self::$course->type = $request->type;
	self::$course->save();

}




public static function updateCourse($request, $id)
    {
        
self::$course = Course::find($id);


self::$course->semester = $request->semester;


self::$course->code = $request->code;


self::$course->course_name = $request->course_name;

	
self::$course->credit = $request->credit;

	
self::$course->type = $request->type;

	
	self::$course->save();

}

public static function deleteCourse($id)
    {
     
   self::$course = Course::find($id);


self::$course->delete();
 
}


 public function semester ()
    {
    
    return $this->belongsTo('App\Models\Semester');
    }



public function batch ()
    {
    
    return $this->belongsTo('App\Models\Batch');
    }



public function student ()
    {
    
    return $this->belongsToMany('App\Models\Student');
    }

    public  function teacher()
    {
        return $this->belongsToMany('App\Models\Teacher');
    }
    public  function course_teacher()
    {
        return $this->belongsToMany('App\Models\CourseTeacher');
    }

} 