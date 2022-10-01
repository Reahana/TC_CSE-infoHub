@extends('admin.master')

@section('brand')

    <a class="link" href="{{route('dashboard')}}">
            <span class="brand">Admin
                <span class="brand-tip">Dashboard</span>
            </span>
        <span class="brand-mini">AD</span>
    </a>

@endsection

@section('title')
    Add New Room
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Add Room Form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                     @if($message = Session::get('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{$message}}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                    <form class="form-horizontal" action="{{route('room.new')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Room No</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="room" placeholder="Room No"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Floor No</label>
                            <div class="col-sm-10">
				<label><input type="radio" name="floor" value="1st"/> 1st Floor  </label>
			     <label><input type="radio" name="floor" value="2nd"/> 2nd Floor </label>
			    <label><input type="radio" name="floor" value="3rd"/> 3rd  Floor </label>
               
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Room Type</label>
                            <div class="col-sm-10">
                              <label><input type="radio" name="room_type" value="Class"/> Classroom</label>
			     <label><input type="radio" name="room_type" value="SL"/> Software Lab</label>
			    <label><input type="radio" name="room_type" value="HL"/> Hardware Lab</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Batch</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="batch" id="batch">
                                    <option> -- Select Batch -- </option>
                                    @foreach($batches as $batch)
                                        <option value="{{$batch->batch}}">{{$batch->batch}}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="semester" id="semester">
                                    <option> -- Select Semester -- </option>
                                    @foreach($semesters as $semester)
                                        <option value="{{$semester->name}}">{{$semester->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Section</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="section" value="A"/> A</label>
                                <label><input type="radio" name="section" value="B"/> B</label>
                            </div>
                        </div>
			
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Create New Room</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection