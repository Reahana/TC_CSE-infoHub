@extends('admin.master')

@section('title')
    Edit Batch
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Batch Form</div>
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
                    <form class="form-horizontal" action="{{route('batch.update',['id' => $batch->id])}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Batch No</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$batch->batch}}" name="batch" placeholder="Batch No"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Session</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$batch->session}}" name="session" placeholder="Session"/>
                            </div>
                        </div>
			 <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                    <select class="form-control" name="semester">
                                    <option> -- Select Semester -- </option>
                                   @foreach($semesters as $semester)
                                       <option value="{{$semester->name}}"{{$semester->name == $batch->semester ? 'selected' : ''}}>{{$semester->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Orientation Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" name="orientation" value="{{$batch->orientation}}" placeholder="Orientation Date"/>
                            </div>
                        </div>
			<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Total Student</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="total_student" value="{{$batch->total_student}}" placeholder="Total Student"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Batch</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection