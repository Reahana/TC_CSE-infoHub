<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
 private static $student;
 private static $image;
 private static $imageName;
 private static $directory;
 private static $extension;
 private static $imageUrl;
 private static $user;

 // save image function
    public static function getImageUrl($request)
    {
       self::$image = $request->file('image');
       if(self::$image)
       {
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'student-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
       }
       else
       {
        return '';
       }
    }

// add new student by admin
    public static function newStudent($request)
    {
        self::$student = new Student();
        self::$student->roll    = $request->roll;
        self::$student->name    = $request->name;
        self::$student->reg     = $request->reg;
        self::$student->batch   = $request->batch;
        self::$student->session  = $request->session;
        self::$student->section  = $request->section;
        self::$student->semester   = $request->semester ;
        self::$student->gender   = $request->gender;
        self::$student->contact  = $request->contact;
        self::$student->email   = $request->email;
        self::$student->address = $request->address;
        self::$student->type   = $request->type;
        self::$student->image  = self::getImageUrl($request);
        self::$student->save();
    }


    //====Update basic info by admin
    public static function updateStudentBasic($request, $id)
    {
        self::$student = Student::find($id);

        self::$image = $request->file('image');
            if(self::$image)
            {
                if(file_exists(self::$student->image))
                {
                    unlink(self::$student->image);
                }
                self::$imageUrl = self::getImageUrl($request);
            }
            else
            {
                self::$imageUrl = self::$student->image;
            }

        self::$student->roll           = $request->roll;
        self::$student->name           = $request->name;
        self::$student->session         = $request->session;
        self::$student->gender         = $request->gender;
        self::$student->type         = $request->type;
        self::$student->image          = self::$imageUrl;

        self::$student->save();
    }
 //====Update academic info by admin
    public static function updateStudentAcademic($request, $id)
    {
        self::$student = Student::find($id);

        self::$student->roll  = $request->roll;
        self::$student->name  = $request->name;
        self::$student->reg   = $request->reg;
        self::$student->batch = $request->batch;
        self::$student->section = $request->section;
        self::$student->semester = $request->semester ;

        self::$student->save();
    }
//====Update contact info by admin
    public static function updateStudentContact($request, $id)
    {
        self::$student = Student::find($id);

        self::$student->roll  = $request->roll;
        self::$student->name  = $request->name;
        self::$student->contact        = $request->contact;
        self::$student->email        = $request->email;
        self::$student->address       = $request->address;
        self::$student->save();
    }


   // add & update student info (contact*) by SELF
    public static function updateStudentSelf($request, $id)
    {
        self::$student = Student::find($id);

        self::$image = $request->file('image');
        if(self::$image)
        {
            if(file_exists(self::$student->image))
            {
                unlink(self::$student->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$student->image;
        }
       
        self::$student->contact        = $request->contact;
        self::$student->email        = $request->email;
        self::$student->address       = $request->address;
        self::$student->fb             = $request->fb;
        self::$student->skill      = $request->skill;
        self::$student->dob      = $request->dob;
        self::$student->father_name      = $request->father_name;
        self::$student->mother_name      = $request->mother_name;
        self::$student->image          = self::$imageUrl;

        self::$student->save();
    }

    // add  student skill  by SELF
    public static function addStudentSkill($request, $id)
    {
        self::$student = Student::find($id);
        self::$student->skill      = $request->skill;
        self::$student->save();
    }

    // add  student blood group  by SELF
    public static function addStudentBloodGroup($request, $id)
    {
        self::$student = Student::find($id);
        self::$student->blood      = $request->blood;
        self::$student->save();
    }

    // delete student by admin
    public static function deleteStudent($id)
    {
        self::$student = Student::find($id);

            if(file_exists(self::$student->image))
            {
unlink(self::$student->image);

            }

        self::$student->delete();
    }

 


public function semester ()
    {
        return $this->belongsTo('App\Models\Semester');
    }

 

public function batch ()
    {
        return $this->belongsTo('App\Models\Batch');
    }

 

public function course ()
    {
    
    return $this->belongsToMany('App\Models\Course');
    }

    public function incourse ()
    {

        return $this->belongsToMany('App\Models\Incourse');
    }
    public function room ()
    {

        return $this->belongsTo('App\Models\Room');
    }

    public  function  user ()
    {

        return $this->belongsTo('App\Models\User');
    }


}
