@extends('front.master')

@section('title')
    Guest Teacher Dashboard
@endsection

@section('body')
    <div class="page-heading">
        @if($message = Session::get('message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{$message}}!</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
            <h1 class="page-title">Welcome {{auth()->user()->name}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href=""><i class="la la-home font-20"></i></a>
                </li>
                <li class="breadcrumb-item">Overview</li>
            </ol>
    </div>
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="ibox">
                    <div class="ibox-body text-center">
                        <div class="m-t-20">
                            @foreach($teachers as $teacher )
                                <img class="img-circle" src="{{asset($teacher->image)}}" alt="" height="100" />
                        </div> {{--photo--}}
                        <h4 class="font-strong m-b-10 m-t-10">{{ $teacher->name }} </h4>
                        <h5 class="m-b-20 text-muted"><b>[{{ $teacher->initial }}] - </b>{{ $teacher->designation }}</h5>
                        <div class="profile-social m-b-20" style="font-size:30px">
                            {{--<a href="javascript:;"><i class="fab fa-twitter"></i></a>--}}
                            <a href="{{$teacher->fb}}" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="tel:{{$teacher->contact}}"><span title="{{$teacher->contact}}"><i class="fas fa-mobile-alt"></i></span></a>
                            <a href="mailto:{{$teacher->email}}"><span title="{{$teacher->email}}"><i  class="fas fa-envelope"></i></span></a>
                        </div> {{--links--}}
                    </div>
                </div>
            </div> {{--left side--}}
            <div class="col-lg-9 col-md-7">
                <div class="ibox">
                    <div class="ibox-body">
                        <ul class="nav nav-tabs tabs-line">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-user"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-file"></i> Class</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab-1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ibox mt-3">
                                            <div class="ibox-body">
                                                <table class="table table-bordered" id="" >
                                                    <tbody>
                                                        <tr width="100%">
                                                            <th width="20%" >Name :</th>
                                                            <td >{{$teacher->name}}</td>
                                                        </tr>

                                                        <tr>
                                                            <th>T_id :</th>
                                                            <td>{{$teacher->t_id}}</td>
                                                        </tr>

                                                        <tr>
                                                            <th >Initial :</th>
                                                            <td>{{$teacher->initial}}</td>
                                                        </tr>

                                                        <tr>
                                                            <th>Designation :</th>
                                                            <td>{{$teacher->designation}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> {{--tab1--}}




                            <div class="tab-pane fade" id="tab-2">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="ibox mt-3">

                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label "><b>Class Load :</b></label>

                                                <div class="col-sm-8 col-form-label">{{$teacher->class}}</div>
                                            </div>
                                            <div class="ibox-head">
                                                <div class="ibox-title">Courses</div>
                                            </div>
                                            <div class="ibox-body">

                                                <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">


                                                        <tr>
                                                            <th>SL No</th>
                                                            <th>Semester</th>
                                                            <th>Section</th>
                                                            <th>Course Code</th>
                                                            <th>Course Name</th>

                                                        </tr>
                                                    @foreach($courses as $course)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$course->semester}}</td>
                                                        <td>{{$course->section}}</td>
                                                        <td>{{$course->code}}</td>
                                                        <td>{{$course->course_name}}</td>

                                                    </tr>

                                                    @endforeach


                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>{{--tab2--}}


                        </div>
                    </div>
                </div> {{--tab3--}}
        </div>  <!-- row    -->
    </div><!-- content -->
    </div>
@endsection