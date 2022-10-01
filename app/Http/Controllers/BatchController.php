<?php

namespace App\Http\Controllers;
use App\Models\Batch;


use App\Models\Semester;
use Illuminate\Http\Request;

class BatchController extends Controller
{
  
private $semesters;
private $batch;
private $batches;

  public function index()
    {
     
    $this->semesters = Semester::all();
   return view('admin.batch.add',[
       'semesters' => $this->semesters]);
    }



public function create(Request $request)
    {
  
      Batch::newBatch($request);
    
   
return redirect()->back()->with('message', 'Batch info create successfully');
   
	
 }

  



public function manage()
    {
       
 $this->batches = Batch::orderBy('id')->get();
      
  return view('admin.batch.manage',['batches' => $this->batches]);
    }

 

 
  
public function edit($id)
    {
   

   
 $this->batch = Batch::find($id);
   
$this->semesters = Semester::all();
 
    
 
 return view('admin.batch.edit', ['batch' => $this->batch,'semesters' => $this->semesters]);
    }

   

 

public function update(Request $request, $id)
    {
      Batch::updateBatch($request, $id);
      return redirect('/manage-batch')->with('message', 'Batch info update successfully');
    }

  



  public function delete(Request $request, $id)
    {
        Batch::deleteBatch($id);
        return redirect('/manage-batch')->with('message', 'Batch info delete successfully');
    }





}
