@extends('admin.master')

@section('title')
    Add New Semester
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Add Semester Form</div>
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
                    <form class="form-horizontal" action="{{route('semester.new')}}" method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" placeholder="Semester "/>
                            </div>
                        </div>
			            <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Credit</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="total_credit" placeholder="Total Credit"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Course</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="total_course" placeholder="Total Course"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Theory</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="theory" placeholder="Theory"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Practical</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="practical" placeholder="Practical"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Project</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="project" placeholder="Project"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-primary btn-block" type="submit">Create New Semester</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection