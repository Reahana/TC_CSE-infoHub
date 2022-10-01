@extends('front.master')
@section('title')
    Incourse Marks
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <h3 class=" my-5">Incourse Marks</h3>
                </div>
                <div class="ibox-body">

                    <h2 class="py-5 text-center text-info">Add Incourse Marks</h2>

                    <div class="row row-cols-1 row-cols-md-3 my-3 g-4">
                        <div class="col">
                            <div class="card border-success">
                                <div class="card-body">
                                    <h5 class="text-success text-center font-26"> 12B1S</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success col-md-5 mr-3" > A</a>
                                    <a href="" class="btn btn-success col-md-5 ml-3" > B</a>
                                </div>

                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-warning">
                                <div class="card-body">
                                    <h5 class="text-warning text-center font-26"> 11B3S</h5>
                                </div>
                                <div class="card-footer">

                                    <a href="" class="btn btn-warning col-md-5 mr-3" > A</a>
                                    <a href="" class="btn btn-warning col-md-5 ml-3" > B</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h5 class="text-primary text-center font-26"> 10B5S</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('incourse.add5SA')}}" class="btn btn-primary col-md-5 mr-3" > A</a>
                                    <a href="{{route('incourse.add5SB')}}" class="btn btn-primary col-md-5 ml-3" > B</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-danger">
                                <div class="card-body">
                                    <h5 class="text-danger text-center font-26"> 9B7S</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-danger col-md-5 mr-3" > A</a>
                                    <a href="" class="btn btn-danger col-md-5 ml-3" > B</a>

                                </div>
                            </div>
                        </div>
                    </div>


                 <h2 class="py-5 text-center text-secondary">View Incourse Marks</h2>
                    <div class="row row-cols-1 row-cols-md-3 my-3 g-4">
                        <div class="col">
                            <div class="card border-success">
                                <div class="card-body">
                                    <h5 class="text-success font-26"> 12B1S View</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success btn-block" > View</a>
                                </div>

                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-warning">
                                <div class="card-body">
                                    <h5 class="text-warning font-26"> 11B3S View</h5>
                                </div>
                                <div class="card-footer">

                                    <a href="" class="btn btn-warning btn-block" >View</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-primary">
                                <div class="card-body">
                                    <h5 class="text-primary font-26"> 10B5S View</h5>
                                </div>
                                <div class="card-footer">
                                    <a href="{{route('incourse.view5S')}}" class="btn btn-primary btn-block" > View</a>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card border-danger">
                                <div class="card-body">
                                    <h5 class="text-danger font-26"> 9B7S View</h5>
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