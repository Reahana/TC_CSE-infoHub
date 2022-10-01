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
   Manage Courses
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Course info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Semester</th>
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Credit</th>
			    <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$course->semester}}</td>
			    <td>{{$course->code}}</td>
			    <td>{{$course->course_name}}</td>
                            <td>{{$course->credit}}</td>
                           <td>{{$course->type}}</td>
			       
                            <td>
                                <a href="{{route('course.edit', ['id' => $course->id])}}" class="btn btn-success btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('courseDeleteForm{{$course->id}}').submit();">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="{{route('course.delete', ['id' => $course->id])}}" method="POST" id="courseDeleteForm{{$course->id}}">
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection