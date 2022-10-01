<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherRoutine extends Model
{
    use HasFactory;
    public static $routine;
    public static function newTeacherRoutine($request)
    {

        self::$routine = new TeacherRoutine();

        self::$routine->day = $request->day;
        self::$routine->t_id = $request->t_id;
        self::$routine->teacher = $request->teacher;
        self::$routine->t_8_50am = $request->t_8_50am;
        self::$routine->t_9_40am = $request->t_9_40am;
        self::$routine->t_10_30am = $request->t_10_30am;
        self::$routine->t_11_20am = $request->t_11_20am;
        self::$routine->t_12_10pm= $request->t_12_10pm;
        self::$routine->t_1_30pm= $request->t_1_30pm;


        self::$routine->save();

    }
    public static function updateTeacherRoutine($request, $id)
    {


        self::$routine = TeacherRoutine::find($id);



        self::$routine->day = $request->day;
        self::$routine->t_id = $request->t_id;
        self::$routine->teacher = $request->teacher;
        self::$routine->t_8_50am = $request->t_8_50am;
        self::$routine->t_9_40am = $request->t_9_40am;
        self::$routine->t_10_30am = $request->t_10_30am;
        self::$routine->t_11_20am = $request->t_11_20am;
        self::$routine->t_12_10pm= $request->t_12_10pm;
        self::$routine->t_1_30pm= $request->t_1_30pm;




        self::$routine->save();
    }
    public  static function deleteTeacherRoutine($id){

        self::$routine = TeacherRoutine::find($id);


        self::$routine->delete();

    }

}
