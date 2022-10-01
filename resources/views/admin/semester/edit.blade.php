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
    Edit Semester
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Semester Form</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
                <div class="ibox-body">

                    <form class="form-horizontal" action="{{route('semester.update', ['id' => $semester->id])}}" method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$semester->name}}" type="text" name="name" placeholder="Semester "/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Credit</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$semester->total_credit}}" name="total_credit" placeholder="Total Credit"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Course</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$semester->total_course}}" name="total_course" placeholder="Total Course"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Theory</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$semester->theory}}" name="theory" placeholder="Theory"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Practical</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$semester->practical}}" name="practical" placeholder="Practical"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Project</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$semester->project}}" name="project" placeholder="Project"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block " type="submit">Update Semester</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection