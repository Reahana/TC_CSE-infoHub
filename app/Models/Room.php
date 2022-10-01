<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


public static $room;




public static function newRoom($request)
{
	
self::$room = new Room();
 

	self::$room->room = $request->room;
	self::$room->floor = $request->floor;
	self::$room->room_type = $request->room_type;
    self::$room->batch =$request->batch;
    self::$room->semester = $request->semester;
    self::$room->section = $request->section;
	self::$room ->save();

}





 public static function updateRoom($request, $id)
    {
    
    	self::$room = Room::find($id);

        self::$room->room = $request->room;
        self::$room->floor = $request->floor;
        self::$room->room_type = $request->room_type;
        self::$room->batch =$request->batch;
        self::$room->semester = $request->semester;
        self::$room->section = $request->section;

	    self::$room ->save();
    }

 

public  static function deleteRoom($id){
     
self::$room = Room::find($id);

      self::$room->delete();

 }
    public function student ()
    {

        return $this->belongsToMany('App\Models\Student');
    }


    public function semester ()
    {

        return $this->belongsToMany('App\Models\Semester');
    }

    public function batch ()
    {

        return $this->belongsToMany('App\Models\Batch');
    }








}
