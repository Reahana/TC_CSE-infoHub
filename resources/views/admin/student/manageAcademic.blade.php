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
    Manage Student Academic
@endsection

@section('body')

	<div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Students Academic info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="500%">
                        <thead>
                        <tr>
                        			    
                            <th>SL No</th>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Reg</th>
                            <th>Batch</th>
                            <th>Section</th>
                            <th>Semester</th>
                            <th>Action</th>
		</tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$student->roll}}</td>
			    <td>{{$student->name}}</td>	
    			    <td>{{$student->reg}}</td>
                            <td>{{$student->batch}}</td>
			     <td>{{$student->section}}</td>
			    <td>{{$student->semester}}</td>
                            <td>
                                <a href="{{route('student.editAcademic', ['id' => $student->id])}}" class="btn btn-success btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('studentDeleteForm{{$student->id}}').submit();">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="{{route('student.delete', ['id' => $student->id])}}" method="POST" id="studentDeleteForm{{$student->id}}">
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