<?php

namespace App\Http\Controllers;


use App\Models\Book;
use App\Models\Semester;
use App\Models\Course;

use App\Models\PDF;

use Illuminate\Http\Request;

class LibraryController extends Controller
{
    


private $courses;
private $semesters;
private $pdfs;
private $pdf;

  public function index()
  {
	$this->courses = Course::all();

	$this->semesters = Semester::all();
 
 	return view ("admin.library.addPDF",
	['semesters' => $this->semesters,
	'courses' => $this->courses]);
  }
 public function create(Request $request)
  
  {
      Book::newBook($request);
    
    	return redirect()->back()->with('message', 
	'PDF create successfully');
  
  }

    public function manage()
    {

        return view('admin.library.manage');
    }

    public function managePdf()
    {
        $this->pdfs= Book::orderBy('id')->get();

        return view('admin.library.managePDF', ['pdfs' => $this->pdfs]);
    }

    public function editPdf($id)
    {

        $this->pdf = Book::find($id);

        return view('admin.library.editPDF', [

            'pdf' => $this->pdf   ]);
    }

    public function updatePdf(Request $request, $id)
    {
        Book::updateBook($request, $id);
        return redirect('/manage-pdf')->with('message', 'Pdf info update successfully');
    }

    public function deletePdf(Request $request, $id)
    {
        Book::deleteBook($id);
        return redirect('/manage-pdf')->with('message', 'Pdf info delete successfully');
    }


}
