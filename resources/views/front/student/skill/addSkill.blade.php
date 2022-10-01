@extends('front.master')

@section('brand')
    <a class="link" href="{{route('student-dashboard')}}">
            <span class="brand">Student
                <span class="brand-tip">Dashboard</span>
            </span>
        <span class="brand-mini">SD</span>
    </a>
@endsection
@section('dashboard')
    {{route('student-dashboard')}}
@endsection

@section('title')
    Student Skills
@endsection



@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title"> Skill Form</div>
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
                        @foreach($students as $student)
                    <form class="form-horizontal" action="{{route('skill.new',['id'=>$student->id])}}" method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Roll Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$student->roll}}" name="roll" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Skills: </label>
                            <div class="col-sm-10">
                                <textarea class="form-control"  name="skill" id="" cols="50" rows="5">{{$student->skill}}</textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-primary btn-block" type="submit">Add / Update Skills</button>
                            </div>
                        </div>
                    </form>
                            @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection