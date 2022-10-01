<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PDF;

class TeacherLibraryController extends Controller
{
    private $pdfs;
    public function index()
    {
        $this->pdfs= Pdf::orderBy('id')->get();

        return view('front.teacher.library.book', ['pdfs' => $this->pdfs]);
    }
}
