@extends('admin.master')
@section('title')
    Manage Guide Teacher
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Guide Teacher  info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="500%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Semester</th>
                            <th>Guide Teacher ID</th>
                            <th>Guide Teacher Name</th>
                            <th>Asst Guide Teacher ID</th>
                            <th>Asst Guide Teacher Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$teacher->semester}}</td>
                                <td>{{$teacher->g_t_id}}</td>
                                <td>{{$teacher->guide_teacher}}</td>
                                <td>{{$teacher->ag_t_id}}</td>
                                <td>{{$teacher->asst_guide_teacher}}</td>
                                 <td>
                                    <a href="{{route('guideTeacher.edit', ['id' => $teacher->id])}}" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('guideTeacherDeleteForm{{$teacher->id}}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('guideTeacher.delete', ['id' => $teacher->id])}}" method="POST" id="guideTeacherDeleteForm{{$teacher->id}}">
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