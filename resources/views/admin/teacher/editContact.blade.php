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
  Edit Teacher Contact
@endsection

@section('body')
  <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Teacher Contact Form</div>
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
                    <form class="form-horizontal" action="{{route('teacher.updateContact',['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                      
			            <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$teacher->name}}" placeholder="Name" readonly/>
                            </div>
                        </div>
		
			
			<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" value="{{$teacher->contact}}" name="contact" placeholder="Contact Number"/>
                        </div>
                    </div>
		    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email"  value="{{$teacher->email}}" name="email" placeholder="Email"/>
                        </div>
                    </div>
		  <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mailing Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Mailing Address">{{$teacher->address}}</textarea>
                            </div>
                        </div>
                    
                   
                 
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Teacher Contact</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection