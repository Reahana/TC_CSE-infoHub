<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incourse extends Model
{
    use HasFactory;


    private static $incourse;

    public static function newIncourse($request)
    {
        self::$incourse = new Incourse();
        self::$incourse->roll    = $request->roll;
        self::$incourse->name    = $request->name;
        self::$incourse->section     = $request->section;
        self::$incourse->reg     = $request->reg;
        self::$incourse->S1_510201    = $request->S1_510201;
        self::$incourse->S1_510202    = $request->S1_510202;
        self::$incourse->S1_510203     = $request->S1_510203;
        self::$incourse->S1_510204    = $request->S1_510204;
        self::$incourse->S1_510205    = $request->S1_510205;
        self::$incourse->S1_510207     = $request->S1_510207;
        self::$incourse->S1_510209     = $request->S1_510209;
        self::$incourse->S3_530201    = $request->S3_530201;
        self::$incourse->S3_530202    = $request->S3_530202;
        self::$incourse->S3_530203     = $request->S3_530203;
        self::$incourse->S3_530204    = $request->S3_530204;
        self::$incourse->S3_530205    = $request->S3_530205;
        self::$incourse->S3_530206     = $request->S3_530206;
        self::$incourse->S3_530207     = $request->S3_530207;

        self::$incourse->save();
    }

    public static function updateIncourse($request, $id)
    {
        self::$incourse = Incourse::find($id);

        self::$incourse->S1_510201    = isset($request->S1_510201) ? $request->S1_510201 : self::$incourse->S1_510201;
        self::$incourse->S1_510202    = isset($request->S1_510202) ? $request->S1_510202 : self::$incourse->S1_510202;
        self::$incourse->S1_510203     = isset($request->S1_510203) ? $request->S1_510203 : self::$incourse->S1_510203;
        self::$incourse->S1_510204    = isset($request->S1_510204) ? $request->S1_510204 : self::$incourse->S1_510204;
        self::$incourse->S1_510205    =isset($request->S1_510205) ? $request->S1_510205 : self::$incourse->S1_510205;
        self::$incourse->S1_510207     = isset($request->S1_510207) ? $request->S1_510207 : self::$incourse->S1_510207;
        self::$incourse->S1_510209     = isset($request->S1_510209) ? $request->S1_510209 : self::$incourse->S1_510209;
        self::$incourse->S3_530201    =isset($request->S3_530201) ? $request->S3_530201 : self::$incourse->S3_530201;
        self::$incourse->S3_530202    =isset($request->S3_530202) ? $request->S3_530202 : self::$incourse->S3_530202;
        self::$incourse->S3_530203     = isset($request->S3_530203) ? $request->S3_530203 : self::$incourse->S3_530203;
        self::$incourse->S3_530204    =isset($request->S3_530204) ? $request->S3_530204 : self::$incourse->S3_530204;
        self::$incourse->S3_530205    = isset($request->S3_530205) ? $request->S3_530205 : self::$incourse->S3_530205;
        self::$incourse->S3_530206     =isset($request->S3_530206) ? $request->S3_530206 : self::$incourse->S3_530206;
        self::$incourse->S3_530207     = isset($request->S3_530207) ? $request->S3_530207 : self::$incourse->S3_530207;

        self::$incourse->save();
    }


    public function student ()
    {

        return $this->belongsToMany('App\Models\Student');
    }
}
