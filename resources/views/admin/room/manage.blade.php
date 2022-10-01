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
   Manage Room
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
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
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
                            <th>Room No</th>
                            <th>Floor No</th>
                            <th>Room Type</th>
                            <th>Batch</th>
                            <th>Semester</th>
                            <th>Section</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rooms as $room)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$room->room}}</td>
			                <td>{{$room->floor}}</td>
                            <td>{{$room->room_type}}</td>
                            <td>{{$room->batch}}</td>
                            <td>{{$room->semester}}</td>
                            <td>{{$room->section}}</td>
                            <td>
                                <a href="{{route('room.edit', ['id' => $room->id])}}" class="btn btn-success btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('roomDeleteForm{{$room->id}}').submit();">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form action="{{route('room.delete', ['id' => $room->id])}}" method="POST" id="roomDeleteForm{{$room->id}}">
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