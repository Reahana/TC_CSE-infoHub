<?php

namespace App\Http\Controllers;





use App\Models\Batch;
use App\Models\Room;
use App\Models\Semester;
use Illuminate\Http\Request;

class RoomController extends Controller
{


    private $batches;
    private $semesters;
    private $sections;
    private $rooms;
    private $room;



    public function index()
    {
        $this->batches=Batch::all();
        $this->semesters=Semester::all();
        return view('admin.room.add',[
            'batches'=>  $this->batches,
            'semesters' => $this->semesters
        ]);

    }




public function create(Request $request)
    {
        Room::newRoom($request);

return redirect()->back()->with('message', 'Room info create successfully');


 }




public function manage()
    {

 $this->rooms = Room::orderBy('id')->get();

  return view('admin.room.manage',['rooms' => $this->rooms]);
    }





public function edit($id)
    {

    $this->room = Room::find($id);
        $this->batches=Batch::all();
        $this->semesters=Semester::all();

 return view('admin.room.edit', [
     'room' => $this->room,
     'batches'=>  $this->batches,
     'semesters' => $this->semesters
 ]);
    }





public function update(Request $request, $id)
    {
      Room::updateRoom($request, $id);
      return redirect('/manage-room')->with('message', 'Room info update successfully');
    }





  public function delete(Request $request, $id)
    {
        Room::deleteRoom($id);
        return redirect('/manage-room')->with('message', 'Room info delete successfully');
    }




}
