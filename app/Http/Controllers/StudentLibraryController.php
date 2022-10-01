<?php

namespace App\Http\Controllers;

use App\Models\Book;
//use App\Models\Pdf;
use Illuminate\Http\Request;

use Barryvdh\DomPDF\Facade;


class StudentLibraryController extends Controller
{
    private $book;
    private $books;
    private $viewPdf;
    private $pdf;

    public function index()
    {
        $this->books = Book::orderBy('id')->get();

        return view('front.student.library.book',
            ['pdfs' => $this->books]);
    }

    public function downloadPDF()
    {
        $this->books = Book::orderBy('id')->get();
        $this->book = Book::where('id',1)->select('*')->first();
        $this->pdf = Facade\Pdf::loadView('front.student.library.book',$this->books);

        return $this->viewPdf->download($this->book->book);
//        return view('front.student.library.book',
//            ['pdfs' => $this->books]);
    }
}

