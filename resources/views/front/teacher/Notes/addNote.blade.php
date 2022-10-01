@extends('front.master')
@section('title')
    Add Notes
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Add Note</div>
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
                    <form class="form-horizontal" action="{{route('note.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @foreach($teachers as $teacher)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Teacher Id</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="t_id" value="{{$teacher->t_id}} " />
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="semester" id="semester">
                                    <option> -- Select Semester -- </option>
                                    @foreach($semesters as $semester)
                                        <option value="{{$semester->semester}}">{{$semester->semester}}</option>
                                    @endforeach
                                    {{--@foreach($teachers as $teacher)--}}
                                    {{--<option value="{{$teacher->semester}}">{{$teacher->semester}}</option>--}}
                                    {{--@endforeach--}}
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Course Code</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="code" id="code">
                                    <option> -- Select Course Code -- </option>
                                    @foreach($courses as $course)
                                        <option value="{{$course->code}}">{{$course->code}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title" placeholder="Title"/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Note</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="note" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Create New Note</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection