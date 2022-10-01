@extends('admin.master')

@section('title')
    Add New Course Teacher
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Add Course Teacher Form</div>
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
                    <form class="form-horizontal" action="{{route('courseTeacher.new')}}" method="POST" >
                        @csrf

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
                            <label class="col-sm-2 col-form-label">Course Code</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="code" id ="code">
                                    <option> -- Select Course Code -- </option>
                                    @foreach($courses as $course)
                                        <option value="{{$course->code}}">{{$course->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Course Title</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="course_name" id="courseName">
                                    <option> -- Select Course Title -- </option>
                                    @foreach($courses as $course)
                                        <option value="{{$course->course_name}}">{{$course->course_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">T_ID</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="t_id" id="t_id">
                                    <option> -- Select Teacher ID -- </option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->t_id}}">{{$teacher->t_id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Teacher</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="teacher" id="teacher">
                                    <option> -- Select Teacher -- </option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->initial}}">{{$teacher->initial}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>




                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Add New Course Teacher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
