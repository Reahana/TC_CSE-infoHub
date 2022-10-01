@extends('front.master')
@section('title')
    Edit Notes
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Note</div>
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
                    <form class="form-horizontal" action="{{route('note.update',['id' => $note->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @foreach($teachers as $teacher)
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Teacher Id</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="t_id" value="{{$note->t_id}} " />
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="semester" id="semester">
                                    <option> -- Select Semester -- </option>
                                    @foreach($semesters as $semester)
                                        <option value="{{$semester->name}}"{{$semester->name == $note->semester ? 'selected' : ''}}>{{$semester->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Course Code</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="code" id="code">
                                    <option> -- Select Course Code -- </option>
                                    @foreach($courses as $course)
                                        <option value="{{$course->code}}" {{$course->code == $note->code? 'selected' : ''}} >{{$course->code}}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title" value="{{$note->title}}"/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Note</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="note"  />
                                <embed src="{{asset($note->note)}}"  width="100%" height="100px" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Note</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection