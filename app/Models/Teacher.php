<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    private static $teacher;
 private static $image;
 private static $imageName;  
 private static $directory;
 private static $extension;
 private static $imageUrl;




public static function getImageUrl($request)
    {
   
   self::$image = $request->file('image');
     
   if(self::$image)
        {
            
self::$extension = self::$image->getClientOriginalExtension();
    self::$imageName = time().'.'.self::$extension; 
self::$directory = 'teacher-images/';
     
self::$image->move(self::$directory, self::$imageName);
            return self::$directory.self::$imageName;        }
      
  else
        {
            return '';
        }
   
 }

   



    public static function newTeacher($request)
        {
            self::$teacher = new Teacher();

            self::$teacher->t_id          = $request->t_id;
            self::$teacher->name           = $request->name;
            self::$teacher->initial         = $request->initial;
            self::$teacher->designation    = $request->designation;
            self::$teacher->class    = $request->class;
            self::$teacher->gender         = $request->gender;
            self::$teacher->contact        = $request->contact;
            self::$teacher->email        = $request->email;
            self::$teacher->address       = $request->address;
            self::$teacher->type            = $request->type;
            self::$teacher->image          = self::getImageUrl($request);

            self::$teacher->save();
        }

 

public static function updateTeacherBasic($request, $id)
    {
        self::$teacher = Teacher::find($id);

     
   self::$image = $request->file('image');
 
       if(self::$image)
        {
      
      if(file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
       
 {
        
    self::$imageUrl = self::$teacher->image;
       
 }

  
self::$teacher->t_id          = $request->t_id;
        
 self::$teacher->name           = $request->name;
 
self::$teacher->initial         = $request->initial;
      
  self::$teacher->designation    = $request->designation;
        self::$teacher->class    = $request->class;
self::$teacher->gender         = $request->gender;
self::$teacher->type            = $request->type;
 self::$teacher->image          = self::$imageUrl;
   
   self::$teacher->save();
   }

  

public static function updateTeacherContact($request, $id)
    {
        self::$teacher = Teacher::find($id);

     
       
 self::$teacher->name           = $request->name;
  
self::$teacher->contact        = $request->contact;
self::$teacher->email        = $request->email;
self::$teacher->address       = $request->address;

   self::$teacher->save();
   }

    public static function updateTeacherSelf($request, $id)
    {
        self::$teacher = Teacher::find($id);

        self::$image = $request->file('image');

        if(self::$image)
        {

            if(file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else

        {

            self::$imageUrl = self::$teacher->image;

        }
        self::$teacher->t_id          = $request->t_id;
        self::$teacher->name           = $request->name;
        self::$teacher->contact        = $request->contact;
        self::$teacher->email        = $request->email;
        self::$teacher->address       = $request->address;
        self::$teacher->fb       = $request->fb;
        self::$teacher->image          = self::$imageUrl;
        self::$teacher->save();
    }



    public static function addTeacherBloodGroup($request, $id)
    {
        self::$teacher = Teacher::find($id);

    self::$teacher->blood         = $request->blood;
   self::$teacher->save();
   }

  





public static function deleteTeacher($id)
    {
    
    self::$teacher = Teacher::find($id);
        if(file_exists(self::$teacher->image))
        {
            unlink(self::$teacher->image);


        }
        self::$teacher->delete();
    }

 




public function course ()
    {
    
    return $this->hasMany('App\Models\Course');
    }

    public function  user ()
    {

        return $this->belongsTo('App\Models\User');
    }


    public static function guideTeacher()
    {
        self::belongsToMany('App\Models\GuideTeacher');

    }


}
