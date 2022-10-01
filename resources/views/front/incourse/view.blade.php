@extends('front.master')

@section('title')
    Incourse Marks
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Incourse Marks</div>
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
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Section</th>
                            <th>Registration</th>
                            <th>530201</th>
                            <th>530202</th>
                            <th>530203</th>
                            <th>530204</th>
                            <th>530205</th>
                            <th>530206</th>
                            <th>530207</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($incourses as $incourse)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$incourse->roll}}</td>
                            <td>{{$incourse->name}}</td>
                            <td>{{$incourse->section}}</td>
                            <td>{{$incourse->reg}}</td>
                            <td>{{$incourse->S3_530201}}</td>
                            <td>{{$incourse->S3_530202}}</td>
                            <td>{{$incourse->S3_530203}}</td>
                            <td>{{$incourse->S3_530204}}</td>
                            <td>{{$incourse->S3_530205}}</td>
                            <td>{{$incourse->S3_530206}}</td>
                            <td>{{$incourse->S3_530207}}</td>
                        </tr>
                        @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection