@extends('admin.master')

@section('title')
   Manage Teacher Basic
@endsection

@section('body')

	<div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Teacher Basic info goes here</div>
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
                            <th>Teacher ID</th>
			    <th>Name</th>
			    <th>Initial</th>
                            <th>Designation</th>
							<th>Class Load</th>
			    <th>Gender</th>
                            <th>Type</th>
			    <th>Image</th>
			    <th>Action</th>
			</tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->t_id}}</td>
			    <td>{{$teacher->name}}</td>	
    			    <td>{{$teacher->initial}}</td>
                            <td>{{$teacher->designation}}</td>
							<td>{{$teacher->class}}</td>
			    <td>{{$teacher->gender}}</td>
                            <td>{{$teacher->type}}</td>
		<td><img src="{{asset($teacher->image)}}" alt="" height="70" width="100"></td>
			 <td>
                                <a href="{{route('teacher.editBasic', ['id' => $teacher->id])}}" class="btn btn-success btn-xs">
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