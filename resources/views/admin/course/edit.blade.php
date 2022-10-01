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
  Edit Courses
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title align-center">Edit Course Form</div>
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
                    <form class="form-horizontal" action="{{route('course.update', ['id' => $course->id])}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="semester">
                                    <option> -- Select Semester -- </option>
                                   @foreach($semesters as $semester)
                                       <option value="{{$semester->name}}"{{$semester->name==$course->semester ? 'selected' : ''}}>{{$semester->name}}</option>
                                  @endforeach
				 
                                        
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Course Code</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$course->code}}" name="code" placeholder="Course Code"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Course Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="course_name" value="{{$course->course_name}}" placeholder="Course Name"/>
                            </div>
                        </div>
                       <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Credit</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="credit" value="{{$course->credit}}" placeholder="Credit"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <label><input type="checkbox" {{$course->type == "Opt" ? 'checked' : '' }} name="type1" value="Opt"/> Optional</label>

                            </div>
                        </div>
          
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Course</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection