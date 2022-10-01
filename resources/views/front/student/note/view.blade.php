
@extends('front.master')

@section('title')
    View Note
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Notes</div>
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

                                <td>
                                    <a href="{{$note->note}}" download="{{$note->title}}" class="btn btn-danger">Download <i class="fa fa-download"></i> </a>

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