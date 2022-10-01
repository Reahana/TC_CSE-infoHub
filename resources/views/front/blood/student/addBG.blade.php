@extends('front.master')



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
                         @foreach($students as $student)
                    <form class="form-horizontal" action="{{route('new.studentBg',['id'=>$student->id])}}" method="POST">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Roll Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$student->roll}}" name="roll" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$student->name}}"  name="name" placeholder="Name" disabled/>
                            </div>
                        </div>

			            <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blood Group</label>
                            <div class="col-sm-10">

                                    <label><input type="radio" {{$student->blood  == "AB+" ? 'checked' : '' }} name="blood" value="AB+"/> AB+   </label>
                                    <label><input type="radio" {{$student->blood  == "AB-" ? 'checked' : '' }} name="blood" value="AB-"/> AB-  </label>
                                    <label><input type="radio" {{$student->blood  == "O+" ? 'checked' : '' }} name="blood" value="O+"/>  O+  </label>
                                    <label><input type="radio" {{$student->blood  == "O-" ? 'checked' : '' }} name="blood" value="O-"/>  O-  </label>
                                    <label><input type="radio" {{$student->blood  == "A+" ? 'checked' : '' }} name="blood" value="A+"/> A+  </label>
                                    <label><input type="radio" {{$student->blood  == "A-" ? 'checked' : '' }} name="blood" value="A-"/>  A-  </label>
                                    <label><input type="radio" {{$student->blood  == "B+" ? 'checked' : '' }} name="blood" value="B+"/> B+  </label>
                                    <label><input type="radio" {{$student->blood  == "B-" ? 'checked' : '' }} name="blood" value="B-"/> B-   </label>


                            </div>
                        </div>

                        @endforeach
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