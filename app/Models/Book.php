<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    private static $image;
    private static $imageUrl;
    private static $imageName;
    private static $bookpdf;

    private static $book;

    private static $bookName;

    private static $directory;

    private static $extension;

    private static $bookUrl;


    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        if(self::$image)
        {
            self::$extension = self::$image->getClientOriginalExtension();
            self::$imageName = time().'.'.self::$extension;
            self::$directory = 'book-images/';
            self::$image->move(self::$directory, self::$imageName);
            return self::$directory.self::$imageName;
        }
        else
        {
            return '';
        }
    }




    public static function getBookUrl($request)
    {

        self::$bookpdf = $request->file('book');

        if(self::$bookpdf)
        {

            self::$extension = self::$bookpdf->getClientOriginalExtension();
            self::$bookName = time().'.'.self::$extension;
            self::$directory = 'book-pdfs/';
            self::$bookpdf->move(self::$directory, self::$bookName);

            return self::$directory.self::$bookName;
        }

        else
        {
            return '';
        }

    }



    public static function newBook($request)
    {

        self::$book = new Book();

        self::$book->name           = $request->name;
         self::$book->image         = self::getImageUrl($request);

        self::$book->book         = self::getBookUrl($request);

        self::$book->save();
    }

    public static function updateBook($request, $id)
    {
        self::$book = Book::find($id);

        self::$image = $request->file('image');
        if(self::$image)
        {
            if(file_exists(self::$book->image))
            {
                unlink(self::$book->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$book->image;
        }

        self::$bookpdf = $request->file('book');
        if(self::$bookpdf)
        {
            if(file_exists(self::$book->book))
            {
                unlink(self::$book->book);
            }
            self::$bookUrl = self::getBookUrl($request);
        }
        else
        {
            self::$bookUrl = self::$book->book;
        }

        self::$book->name           = $request->name;
        self::$book->image         = self::$imageUrl;
        self::$book->book         =  self::$bookUrl;

        self::$book->save();


    }


    public static function deleteBook($id)
    {
        self::$book = Book::find($id);

        if(file_exists(self::$book->image))
        {
            unlink(self::$book->image);
        }
        if(file_exists(self::$book->book))
        {
            unlink(self::$book->book);
        }


        self::$book->delete();
    }

}
