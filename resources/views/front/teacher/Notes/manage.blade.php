
@extends('front.master')

@section('title')
    Manage Note
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Note info goes here</div>
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
                            <th>Code</th>
                            <th>Semester</th>
                            <th>Title</th>
                            <th>File</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notes as $note)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$note->code}}</td>
                                <td>{{$note->semester}}</td>
                                <td>{{$note->title}}</td>
                                <td><embed src="{{$note->note}}" type="application/pdf" width="100%" height="100px" /></td>
                                @if(auth()->user()->t_id == $note->t_id || auth()->user()->g_id == $note->t_id)
                                <td>
                                    <a href="{{route('note.edit', ['id' => $note->id])}}" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('noteDeleteForm{{$note->id}}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('note.delete', ['id' => $note->id])}}" method="POST" id="noteDeleteForm{{$note->id}}">
                                        @csrf
                                    </form>
                                </td>
                                    @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection