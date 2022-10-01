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
    Add Guide Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Add Guide Teacher Form</div>
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
                    <form class="form-horizontal" action="{{route('guideTeacher.new')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Semester</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="semester" >
                                    <option> -- Select Semester -- </option>
                                    @foreach($semesters as $semester)
                                        <option value="{{$semester->name}}">{{$semester->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Guide Teacher ID</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="g_t_id" id="g_t_id">
                                    <option> -- Select Guide Teacher ID -- </option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->t_id}}">{{$teacher->t_id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Guide Teacher Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="guide_teacher" id="teacher">
                                    <option> -- Select Guide Teacher -- </option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->initial}}">{{$teacher->initial}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Assistant Guide Teacher ID</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="ag_t_id" id="ag_t_id" >
                                    <option> -- Select Assistant Guide Teacher ID -- </option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->t_id}}">{{$teacher->t_id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Assistant Guide Teacher Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="asst_guide_teacher" id="asst_teacher" >
                                    <option> -- Select Assistant Guide Teacher -- </option>
                                    @foreach($teachers as $teacher)
                                        <option value="{{$teacher->initial}}">{{$teacher->initial}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
			{{----}}
	
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-info btn-block" type="submit">Create New Guide Teacher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection