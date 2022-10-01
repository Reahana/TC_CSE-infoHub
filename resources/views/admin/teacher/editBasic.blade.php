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
  Edit Teacher Basic 
@endsection

@section('body')
  <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Teacher Basic Info Form</div>
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
                    <form class="form-horizontal" action="{{route('teacher.updateBasic',['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Teacher ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$teacher->t_id}}" name="t_id" placeholder="Teacher ID"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$teacher->name}}" placeholder="Name"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Initial </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="initial" value="{{$teacher->initial}}" placeholder="Initial"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Designation</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="designation" value="{{$teacher->designation}}" placeholder="Designation"/>
                            </div>
                        </div>
						<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Class Load</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="class" value="{{$teacher->class}}" placeholder="Class Load"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$teacher->gender == "male" ? 'checked' : '' }}  name="gender" value="male"/> Male</label>
                                <label><input type="radio" {{$teacher->gender == "female" ? 'checked' : '' }}  name="gender" value="female"/> Female</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Teacher Type</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$teacher->type == "Guest" ? 'checked' : '' }} name="type" value="Guest"/> Guest</label>
								<label><input type="radio" {{$teacher->type == "Faculty" ? 'checked' : '' }} name="type" value="Faculty"/> Faculty</label>

                            </div>
                        </div>
			
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Teacher Image</label>
                        <div class="col-sm-10">
                            <input class="form-control-file" type="file" name="image" accept="image/*"/>
				  <img src="{{asset($teacher->image)}}" alt="" height="60" width="80"/>
                        </div>
                    </div>
              
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Teacher Basic Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection