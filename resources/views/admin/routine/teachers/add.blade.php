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
    Add New Teacher Routine
@endsection

@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="ibox mt-3">
            <div class="ibox-head">
                <div class="ibox-title">Add Teacher Routine Form</div>
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
                <form class="form-horizontal" action="{{route('new.routine')}}" method="POST" enctype="multipart/form-data">
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
                        <label class="col-sm-2 col-form-label">Teacher ID</label>
                        <div class="col-sm-10">
				            <select class="form-control" name="t_id" id="t_id">
                                    <option> -- Teacher ID -- </option>
                                   @foreach($teachers as $teacher)
                                       <option value="{{$teacher->t_id}}">{{$teacher->t_id}}</option>
                                  @endforeach
                                </select>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Teacher Name</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="teacher" id="teacher">
                                <option> -- Teacher Name -- </option>
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->initial}}">{{$teacher->initial}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">8:50 am</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="t_8_50am" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">9:40 am</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text"   name="t_9_40am"/>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">10:30 am</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="t_10_30am"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">11:20 am</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="t_11_20am" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">12:10 pm</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="t_12_10pm" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">1:30 pm</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="t_1_30pm" />
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