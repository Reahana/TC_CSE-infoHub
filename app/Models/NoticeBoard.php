<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoticeBoard extends Model
{
    use HasFactory;
    private static $notice;
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
            self::$directory = 'notice-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory.self::$imageName;
        }
        else
        {
            return '';
        }
    }

    public static function newNotice($request)
    {

        self::$notice = new NoticeBoard();
        self::$notice->author_id= $request->author_id;
        self::$notice->author= $request->author;
        self::$notice->title = $request->title;
        self::$notice->notice = $request->notice;
        self::$notice->image  = self::getImageUrl($request);
        self::$notice->save();

    }

    public static function updateNotice($request, $id)
    {

        self::$notice = NoticeBoard::find($id);

        self::$image = $request->file('image');
        if(self::$image)
        {
            if(file_exists(self::$notice->image))
            {
                unlink(self::$notice->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$notice->image;
        }
        self::$notice->author_id= $request->author_id;
        self::$notice->author= $request->author;
        self::$notice->title = $request->title;
        self::$notice->notice = $request->notice;
        self::$notice->image = self::$imageUrl;


        self::$notice->save();
    }

    public static function deleteNotice($id)
    {
        self::$notice =NoticeBoard::find($id);

        if(file_exists(self::$notice->image))
        {
            unlink(self::$notice->image);
        }
        self::$notice->delete();
    }

}
