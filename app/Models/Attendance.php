<?php

namespace App\Models;

use Egulias\EmailValidator\Exception\AtextAfterCFWS;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    private static $attendance;

    public static function newAttendance($request)
    {
        self::$attendance = new Attendance();
        self::$attendance->roll    = $request->roll;
        self::$attendance->name    = $request->name;
        self::$attendance->section    = $request->section;
        self::$attendance->reg     = $request->reg;
        self::$attendance->S1_510201    = $request->S1_510201;
        self::$attendance->S1_510202    = $request->S1_510202;
        self::$attendance->S1_510203     = $request->S1_510203;
        self::$attendance->S1_510204    = $request->S1_510204;
        self::$attendance->S1_510205    = $request->S1_510205;
        self::$attendance->S1_510207     = $request->S1_510207;
        self::$attendance->S1_510209     = $request->S1_510209;
        self::$attendance->S3_530201    = $request->S3_530201;
        self::$attendance->S3_530202    = $request->S3_530202;
        self::$attendance->S3_530203     = $request->S3_530203;
        self::$attendance->S3_530204    = $request->S3_530204;
        self::$attendance->S3_530205    = $request->S3_530205;
        self::$attendance->S3_530206     = $request->S3_530206;
        self::$attendance->S3_530207     = $request->S3_530207;

        self::$attendance->save();
        }
    public static function attendancePercentage($request)
    {
//        self::$attendance =Attendance::find($id);
        self::$attendance->total     = $request->total;
        self::$attendance->attend = $request->attend;

        self::$attendance->S3_530204 = (self::$attendance->attend /self::$attendance->total) *100;

        return  self::$attendance->S3_530204 ;
    }


//    public static function updateAttendance($request, $id)
//    {
//        self::$attendance= Attendance::find($id);
//
//        self::$attendance->roll    = $request->roll;
//        self::$attendance->name    = $request->name;
//        self::$attendance->reg     = $request->reg;
//        self::$attendance->S1_510201    = $request->S1_510201;
//        self::$attendance->S1_510202    = $request->S1_510202;
//        self::$attendance->S1_510203     = $request->S1_510203;
//        self::$attendance->S1_510204    = $request->S1_510204;
//        self::$attendance->S1_510205    = $request->S1_510205;
//        self::$attendance->S1_510207     = $request->S1_510207;
//        self::$attendance->S1_510209     = $request->S1_510209;
//        self::$attendance->S3_530201    = $request->S3_530201;
//        self::$attendance->S3_530202    = $request->S3_530202;
//        self::$attendance->S3_530203     = self::attendancePercentage($request);
//        self::$attendance->S3_530204    = $request->S3_530204;
//        self::$attendance->S3_530205    = $request->S3_530205;
//        self::$attendance->S3_530206     = $request->S3_530206;
//        self::$attendance->S3_530207     = $request->S3_530207;
//
//        self::$attendance->save();
//    }

    public static function updateAttendance($request, $id)
    {

        self::$attendance= Attendance::find($id);

        self::$attendance->S1_510201    = isset($request->S1_510201) ? $request->S1_510201 : self::$attendance->S1_510201;
        self::$attendance->S1_510202    = isset($request->S1_510202) ? $request->S1_510202 : self::$attendance->S1_510202;
        self::$attendance->S1_510203     = isset($request->S1_510203) ? $request->S1_510203 : self::$attendance->S1_510203;
        self::$attendance->S1_510204    = isset($request->S1_510204) ? $request->S1_510204 : self::$attendance->S1_510204;
        self::$attendance->S1_510205    =isset($request->S1_510205) ? $request->S1_510205 : self::$attendance->S1_510205;
        self::$attendance->S1_510207     = isset($request->S1_510207) ? $request->S1_510207 : self::$attendance->S1_510207;
        self::$attendance->S1_510209     = isset($request->S1_510209) ? $request->S1_510209 : self::$attendance->S1_510209;
        self::$attendance->S3_530201    =isset($request->S3_530201) ? $request->S3_530201 : self::$attendance->S3_530201;
        self::$attendance->S3_530202    =isset($request->S3_530202) ? $request->S3_530202 : self::$attendance->S3_530202;
        self::$attendance->S3_530203     = isset($request->S3_530203) ? $request->S3_530203 : self::$attendance->S3_530203;
        self::$attendance->S3_530204    =isset($request->S3_530204) ? $request->S3_530204 : self::$attendance->S3_530204;
        self::$attendance->S3_530205    = isset($request->S3_530205) ? $request->S3_530205 : self::$attendance->S3_530205;
        self::$attendance->S3_530206     =isset($request->S3_530206) ? $request->S3_530206 : self::$attendance->S3_530206;
        self::$attendance->S3_530207     = isset($request->S3_530207) ? $request->S3_530207 : self::$attendance->S3_530207;

        self::$attendance->save();


    }

}
