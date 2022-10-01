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
  Edit Teacher Password
@endsection

@section('body')
  <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Teacher Password Form</div>
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
                    <form class="form-horizontal" action="{{route('teacher.updatePassword',['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Teacher ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$teacher->t_id}}" name="t_id" placeholder="Teacher ID" readonly/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$teacher->name}}" placeholder="Name" readonly/>
                            </div>
                        </div>
		
                  <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Default Password</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="password" value="{{$teacher->password}}" placeholder="Password"/>
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Teacher Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection