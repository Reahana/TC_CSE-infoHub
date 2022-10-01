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
    Add New Routine
@endsection

@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="ibox mt-3">
            <div class="ibox-head">
                <div class="ibox-title">Add Routine Form</div>
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
                <form class="form-horizontal" action="{{route('routine.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
		 <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Day</label>
                        <div class="col-sm-10">
                           <select class="form-control" name="day">
                                    <option> -- Select Day -- </option>
                              	    <option value="Saturday">Saturday</option>
                                    <option value="Sunday">Sunday</option>
                                    <option value="Monday">Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday">Friday</option>
                                </select>
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
                             <label><input type="radio" name="section" id="section" value="A"/> A</label>
                                <label><input type="radio" name="section" id="section" value="B"/> B</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">8:50 am</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="t_8_50am" id ="code">
                                <option value="-" > -- Select Course Code -- </option>
                                @foreach($courses as $course)
                                    <option value="{{$course->code}}">{{$course->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">9:40 am</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="t_9_40am" id ="code1">
                                <option value="-"> -- Select Course Code -- </option>
                                @foreach($courses as $course)
                                    <option value="{{$course->code}}">{{$course->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">10:30 am</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="t_10_30am" id ="code2">
                                <<option value="-"> -- Select Course Code -- </option>
                                @foreach($courses as $course)
                                    <option value="{{$course->code}}">{{$course->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">11:20 am</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="t_11_20am" id ="code3">
                                <option value="-" > -- Select Course Code -- </option>
                                @foreach($courses as $course)
                                    <option value="{{$course->code}}">{{$course->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">12:10 pm</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="t_12_10pm" id ="code4">
                                <option value="-" > -- Select Course Code -- </option>
                                @foreach($courses as $course)
                                    <option value="{{$course->code}}">{{$course->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">1:30 pm</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="t_1_30pm" id ="code5">
                                <option value="-"> -- Select Course Code -- </option>
                                @foreach($courses as $course)
                                    <option value="{{$course->code}}">{{$course->code}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-info btn-block" type="submit">Add New Routine</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection