<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;
    public static $note;
    private static $file;
    private static $fileName;
    private static $directory;
    private static $extension;
    private static $fileUrl;


    public static function getFileUrl($request)
    {
        self::$file = $request->file('note');
        if(self::$file)
        {
            self::$extension = self::$file->getClientOriginalExtension();
            self::$fileName = time().'.'.self::$extension;
            self::$directory = 'all-notes/';
            self::$file->move(self::$directory, self::$fileName);
            return self::$directory.self::$fileName;
        }
        else
        {
            return '';
        }
    }


    public static function newNote($request)
    {

        self::$note = new Note();
        self::$note->t_id = $request->t_id;
        self::$note->semester = $request->semester;
        self::$note->code = $request->code;
        self::$note->title = $request->title;
        self::$note->note  = self::getFileUrl($request);
        self::$note->save();

    }

    public static function updateNote($request,$id)
    {

        self::$note = Note::find($id);

        self::$file = $request->file('note');
        if(self::$file)
        {
            if(file_exists(self::$note->note))
            {
                unlink(self::$note->note);
            }
            self::$fileUrl = self::getFileUrl($request);
        }
        else
        {
            self::$fileUrl = self::$note->note;
        }
        self::$note->t_id = $request->t_id;
        self::$note->semester = $request->semester;
        self::$note->code = $request->code;
        self::$note->title = $request->title;
        self::$note->note  = self::$fileUrl ;

        self::$note->save();

    }
    public static function deleteNote($id)
    {
        self::$note = Note::find($id);

        if(file_exists(self::$note->note))
        {
            unlink(self::$note->note);
        }

        self::$note->delete();
    }


}
