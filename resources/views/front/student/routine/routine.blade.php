@extends('front.master')

@section('title')
     Routine
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Routine</div>
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
                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">


                                <tr>
                                    <th>Day</th>
                                    <th>8:50 AM</th>
                                    <th>9:40 AM</th>
                                    <th>10:30 AM</th>
                                    <th>11:20 AM</th>
                                    <th>12:10 PM</th>
                                    <th>1:30 PM</th>
                                </tr>



                            @foreach($routines as $routine)
                            <tr>
                                <th>{{$routine->day}}</th>
                                <td>{{$routine->t_8_50am}}</td>
                                <td>{{$routine->t_9_40am}}</td>
                                <td>{{$routine->t_10_30am}}</td>
                                <td>{{$routine->t_11_20am}}</td>
                                <td>{{$routine->t_12_10pm}}</td>
                                <td>{{$routine->t_1_30pm}}</td>
                            </tr>
                            @endforeach



                        </table>

                </div>
            </div>
        </div>
    </div>
    @endsection