@extends('front.master')
@section('title')
   View Profile
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-4 mx-3 py-3">
                <div class="ibox-head">
                    <div class="font-bold font-26 text-primary">Teacher Profile</div>
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
                    <table class="table table-bordered font-20">
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <th width="25%">Teacher ID</th>
                                <td colspan="2">{{$teacher->t_id}}</td>
                                <td  rowspan="2"><img src="{{asset($teacher->image)}}" alt="" width="120" height="150"></td>
                            </tr>

                            <tr>
                                <th>Teacher Name</th>
                                <td colspan="2">{{$teacher->name}}</td>
                            </tr>
                            <tr>
                                <th>Initial</th>
                                <td>{{$teacher->initial}}</td>
                                <th>Designation</th>
                                <td>{{$teacher->designation}}</td>
                            </tr>

                            <tr>
                                <th>Gender</th>
                                <td>{{$teacher->gender}}</td>
                                <th >Blood Group</th>
                                <td >{{$teacher->blood}}</td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td>{{$teacher->contact}}</td>
                                <th>Email</th>
                                <td>{{$teacher->email}}</td>
                            </tr>

                            <tr>
                                <th>Address</th>
                                <td colspan="3">{{$teacher->address}}</td>
                            </tr>
                            <tr>
                                <th>Type</th>
                                <td colspan="3">{{$teacher->type}}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection