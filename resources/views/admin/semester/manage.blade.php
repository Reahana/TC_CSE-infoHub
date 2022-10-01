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
    Manage Semester
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Semester info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Semester</th>
                            <th>Total Credit</th>
                            <th>Total Course</th>
   			    <th>Theory</th>
			    <th>Practical</th>
			    <th>Project</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($semesters as $semester)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$semester->name}}</td>
                            <td>{{$semester->total_credit}}</td>
                            <td>{{$semester->total_course}}</td>
                           <td>{{$semester->theory}}</td>
			         <td>{{$semester->practical}}</td>
			   <td>{{$semester->project}}</td>
                            <td>
                                <a href="{{route('semester.edit', ['id' => $semester->id])}}" class="btn btn-success btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('semesterDeleteForm{{$semester->id}}').submit();">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="{{route('semester.delete', ['id' => $semester->id])}}" method="POST" id="semesterDeleteForm{{$semester->id}}">
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