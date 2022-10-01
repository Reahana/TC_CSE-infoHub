@extends('front.master')

@section('brand')
    <a class="link" href="{{route('teacher-dashboard')}}">
            <span class="brand">
                <span class="brand-tip">Teacher Dashboard</span>
            </span>
        <span class="brand-mini">SD</span>
    </a>
@endsection

@section('dashboard')
    {{route('teacher-dashboard')}}
@endsection

@section('title')
    Blood Bank
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-5">
                <div class="ibox-head">
                    <div class="ibox-title">Add Blood Group Form</div>
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
                    @foreach($teachers as $teacher)
                    <form class="form-horizontal" action="{{route('new.teacherBg',['id'=>$teacher->id])}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Teacher Id</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="t_id" value="{{$teacher->t_id}}" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$teacher->name}}" readonly/>
                            </div>
                        </div>
                        @endforeach
			            <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blood Group</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$teacher->blood  == "AB+" ? 'checked' : '' }} name="blood" value="AB+"/> AB+   </label>
                                <label><input type="radio" {{$teacher->blood  == "AB-" ? 'checked' : '' }} name="blood" value="AB-"/> AB-  </label>
                                <label><input type="radio" {{$teacher->blood  == "O+" ? 'checked' : '' }} name="blood" value="O+"/>  O+  </label>
                                <label><input type="radio" {{$teacher->blood  == "O-" ? 'checked' : '' }} name="blood" value="O-"/>  O-  </label>
                                <label><input type="radio" {{$teacher->blood  == "A+" ? 'checked' : '' }} name="blood" value="A+"/> A+  </label>
                                <label><input type="radio" {{$teacher->blood  == "A-" ? 'checked' : '' }} name="blood" value="A-"/>  A-  </label>
                                <label><input type="radio" {{$teacher->blood  == "B+" ? 'checked' : '' }} name="blood" value="B+"/> B+  </label>
                                <label><input type="radio" {{$teacher->blood  == "B-" ? 'checked' : '' }} name="blood" value="B-"/> B-   </label>

                            </div>
                        </div>
	
			
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-success btn-block" type="submit">Add Blood Group</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection