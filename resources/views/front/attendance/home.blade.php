@extends('front.master')
@section('title')
    Attendance
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <h3 class=" my-5">Attendance</h3>
                </div>

                <div class="ibox-body">
                    <div class="row row-cols-1 row-cols-md-3 my-3 g-4">

                        <div class="col">
                            <div class="card border-success">
                                <div class="card-body">
                                    <h5 class="text-success text-center font-26"> 12B1S - Add</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success col-md-5 mr-3" > A</a>
                                    <a href="" class="btn btn-success col-md-5 ml-3"  > B</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-warning">
                                <div class="card-body">
                                    <h5 class="text-warning text-center font-26"> 11B3S- Add</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-warning col-md-5 mr-3" > A</a>
                                    <a href="" class="btn btn-warning col-md-5 ml-3"  > B</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h5 class="text-primary text-center font-26"> 10B5S- Add</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('attendance.add5SA')}}" class="btn btn-primary col-md-5 mr-3" > A</a>
                                    <a href="{{route('attendance.add5SB')}}" class="btn btn-primary col-md-5 ml-3"  > B</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-danger">
                                <div class="card-body">
                                    <h5 class="text-danger text-center font-26"> 9B7S- Add</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-danger col-md-5 mr-3" > A</a>
                                    <a href="" class="btn btn-danger col-md-5 ml-3"  > B</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <h2 class="py-5 text-center text-info">View Attendance Percentage</h2>
                    <div class="row row-cols-1 row-cols-md-3 my-3 g-4">

                        <div class="col">
                            <div class="card border-success">
                                <div class="card-body">
                                    <h5 class="text-success text-center font-26"> 12B1S</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success btn-block" > View</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-warning">
                                <div class="card-body">
                                    <h5 class="text-warning text-center font-26"> 11B3S</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-warning btn-block" >View</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h5 class="text-primary text-center font-26"> 10B5S</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('attendance.view5S')}}" class="btn btn-primary btn-block" > View</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-danger">
                                <div class="card-body">
                                    <h5 class="text-danger text-center font-26"> 9B7S</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-danger btn-block" > View</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection