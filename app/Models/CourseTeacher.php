<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;

    private static $teacher;

    public static function newCourseTeacher($request)
    {
        self::$teacher = new CourseTeacher();

        self::$teacher->semester    = $request->semester;
        self::$teacher->section    = $request->section;
        self::$teacher->code    = $request->code;
        self::$teacher->course_name = $request->course_name;
        self::$teacher->t_id    = $request->t_id;
        self::$teacher->teacher = $request->teacher;

        self::$teacher->save();
    }
    public static function updateCourseTeacher($request, $id)
    {

        self::$teacher = CourseTeacher::find($id);

        self::$teacher->semester    = $request->semester;
        self::$teacher->section    = $request->section;
        self::$teacher->code    = $request->code;
        self::$teacher->course_name = $request->course_name;
        self::$teacher->t_id    = $request->t_id;
        self::$teacher->teacher = $request->teacher;

        self::$teacher->save();

    }
    public static function deleteCourseTeacher($id)
    {

        self::$teacher = CourseTeacher::find($id);


        self::$teacher->delete();

    }

    public function course()
    {
        return $this->hasMany('App\Models\Course');
    }
}