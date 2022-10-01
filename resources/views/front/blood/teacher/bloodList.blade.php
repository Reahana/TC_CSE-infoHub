@extends('front.master')

@section('title')
    Blood Bank : Teacher
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Teacher Blood Group</div>
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
                            <th>T_id</th>
                            <th>Name</th>
                            <th>Initial</th>
                            <th>Blood Group</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$teacher->t_id}}</td>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->initial}}</td>
                                <td>{{$teacher->blood}}</td>


                                {{--<td>--}}
                                    {{--<a href="{{route('batch.edit', ['id' => $batch->id])}}" class="btn btn-success btn-xs">--}}
                                        {{--<i class="fa fa-edit"></i>--}}
                                    {{--</a>--}}
                                    {{--<a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('batchDeleteForm{{$batch->id}}').submit();">--}}
                                        {{--<i class="fa fa-trash"></i>--}}
                                    {{--</a>--}}
                                    {{--<form action="{{route('batch.delete', ['id' => $batch->id])}}" method="POST" id="batchDeleteForm{{$batch->id}}">--}}
                                        {{--@csrf--}}
                                    {{--</form>--}}
                                {{--</td>--}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection