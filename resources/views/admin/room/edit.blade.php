@extends('admin.master')


@section('title')
   Edit Room
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Room Form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                     @if($message = Session::get('message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{$message}}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                    <form class="form-horizontal" action="{{route('room.update',['id'=>$room->id])}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Room No</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$room->room}}"  name="room" placeholder="Room No"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Floor No</label>
                            <div class="col-sm-10">
				<label><input type="radio" name="floor" {{$room->floor == "1st" ? 'checked' : '' }} value="1st"/> 1st Floor</label>
			     <label><input type="radio" name="floor" {{$room->floor == "2nd" ? 'checked' : '' }} value="2nd"/> 2nd Floor</label>
			    <label><input type="radio" name="floor" {{$room->floor == "3rd" ? 'checked' : '' }} value="3rd"/> 3rd Floor</label>
	
                        
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Room Type</label>
                            <div class="col-sm-10">
                              <label><input type="radio" name="room_type" {{$room->room_type == "Class" ? 'checked' : '' }} value="Class"/> Classroom</label>
			     <label><input type="radio" name="room_type" {{$room->room_type == "SL" ? 'checked' : '' }} value="SL"/> Software Lab</label>
			    <label><input type="radio" name="room_type" {{$room->room_type == "HL" ? 'checked' : '' }} value="HL"/> Hardware Lab</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Batch</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="batch" id="batch">
                                    <option> -- Select Batch -- </option>
                                    @foreach($batches as $batch)
                                        <option value="{{$batch->batch}}"{{$batch->batch==$room->batch ? 'selected' : ''}}>{{$batch->batch}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <select class="form-control"   name="semester" id="semester">
                                    <option> -- Select Semester -- </option>
                                    @foreach($semesters as $semester)
                                        <option value="{{$semester->name}}"{{$semester->name==$room->semester ? 'selected' : ''}}>{{$semester->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Section</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$room->section == "A" ? 'checked' : '' }} name="section" value="A"/> A</label>
                                <label><input type="radio" {{$room->section == "B" ? 'checked' : '' }} name="section" value="B"/> B</label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Room</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection