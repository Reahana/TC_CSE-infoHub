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
   Manage Teacher
@endsection

@section('body')

	<div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Teacher info goes here</div>
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
			    <th>Name</th>
			    <th>Contact</th>
			    <th>Email</th>
                            <th>Address</th>
			    <th>Action</th>
		</tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
			    <td>{{$teacher->name}}</td>
                           <td>{{$teacher->contact}}</td>
                           <td>{{$teacher->email}}</td> 
  			   <td>{{$teacher->address}}</td>
                            <td>
                                <a href="{{route('teacher.editContact', ['id' => $teacher->id])}}" class="btn btn-success btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('teacherDeleteForm{{$teacher->id}}').submit();">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="{{route('teacher.delete', ['id' => $teacher->id])}}" method="POST" id="teacherDeleteForm{{$teacher->id}}">
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