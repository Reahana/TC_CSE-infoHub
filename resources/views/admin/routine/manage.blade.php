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
    Manage Routine
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Room info goes here</div>
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
                            <th>Day</th>
                            <th>Batch</th>
                            <th>Semester</th>
                            <th>Section</th>
                            <th>8:50 AM</th>
                            <th>9:40 AM</th>
                            <th>10:30 AM</th>
                            <th>11:20 AM</th>
                            <th>12:10 PM</th>
                            <th>1:30 PM</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($routines as $routine)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$routine->day}}</td>
                                <td>{{$routine->batch}}</td>
                                <td>{{$routine->semester}}</td>
                                <td>{{$routine->section}}</td>
                                <td>{{$routine->t_8_50am}}</td>
                                <td>{{$routine->t_9_40am}}</td>
                                <td>{{$routine->t_10_30am}}</td>
                                <td>{{$routine->t_11_20am}}</td>
                                <td>{{$routine->t_12_10pm}}</td>
                                <td>{{$routine->t_1_30pm}}</td>
                                <td>
                                    <a href="{{route('routine.edit', ['id' => $routine->id])}}" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('routineDeleteForm{{$routine->id}}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('routine.delete', ['id' => $routine->id])}}" method="POST" id="routineDeleteForm{{$routine->id}}">
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