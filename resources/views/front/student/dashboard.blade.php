@extends('front.master')

@section('title')
    Student Dashboard
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
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Overview</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="ibox">
                            <div class="ibox-body text-center">
                                <div class="m-t-20">
                                    @foreach($students as $student )
                                        <img class="img-circle" src="{{asset($student->image)}}" alt="" height="80" />
                                </div> {{--photo--}}
                                <h4 class="font-strong m-b-10 m-t-10" id="name">{{$student->name}}</h4>
                                <h5 class="m-b-20 text-muted"> {{$student->batch}}B{{$student->semester}}S - {{$student->section}} -{{$student->roll}}</h5>
                                <div class="profile-social m-b-20" style="font-size:30px">
                                    {{--<a href="javascript:;"><i class="fab fa-twitter"></i></a>--}}
                                    <a href="{{$student->fb}}" target="_blank"><i  class="fab fa-facebook "></i></a>
                                    <a href="tel:{{$student->contact}}"><span title="{{$student->contact}}"><i  class="fas fa-mobile-alt"></i></span></a>
                                    <a href="mailto:{{$student->email}}"><span title="{{$student->email}}"><i  class="fas fa-envelope"></i></span></a>
                                </div> {{--links--}}
                                <div>
                                    <a href="{{route('skill.add')}}" class="btn btn-info btn-rounded m-b-5"><i class="fa fa-plus"></i> Skills</a>
                                    <div class="font-strong m-b-10 m-t-10 text-danger">{{$student->skill}}</div>{{--<button class="btn btn-default btn-rounded m-b-5">Message</button>--}}
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="col-lg-9 col-md-8">
                        <div class="ibox">
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tab-1" data-toggle="tab"><i class="ti-user"></i> Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><i class="ti-book"></i> Courses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab-3" data-toggle="tab"><i class="ti-pencil"></i> Guide Teacher</a>
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
                                                                        <td >{{$student->name}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Roll :</th>
                                                                        <td>{{$student->roll}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th >Semester :</th>
                                                                        <td>{{$student->semester}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Batch :</th>
                                                                        <td>{{$student->batch}}</td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th>Section :</th>
                                                                        <td>{{$student->section}}</td>
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

                                                        <label class="col-sm-4 col-form-label">Room no :</label>
                                                        @foreach($rooms as $room)
                                                        <div class="col-sm-8 col-form-label">{{$room->room}}</div>
                                                          @endforeach
                                                    </div>
                                                    <div class="ibox-head">
                                                        <div class="ibox-title">All Course info goes here</div>
                                                    </div>
                                                    <div class="ibox-body">
                                                    
                                                        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                                            <thead>
                                                            <tr>
                                                                <th>Course Code</th>
                                                                <th>Course Name</th>
                                                                <th>Course Teacher</th>
                                                              

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach($courses as $course )
                                                            <tr>

                                                                <td>{{$course->code}}</td>
                                                                <td>{{$course->course_name}}</td>
                                                                <td>{{$course->teacher}}</td>


                                                            </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> {{--tab2--}}

                                    <div class="tab-pane fade" id="tab-3">
                                        <div class=" py-5 row row-cols-1 row-cols-md-2 g-4">
                                            @foreach($guideTeachers as $guideTeacher)
											
                                                <div class="col-4 pb-1">
                                                    <div class="card">
														<h2 class="card-header">Guide Teacher</h2>
                                                        <img class="card-img-top" src="{{asset($guideTeacher->image)}}" alt="" height="150" width="120">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{$guideTeacher->name}}</h4>
                                                            <h5 class="card-title">[{{$guideTeacher->initial}}]</h5>
                                                            <p class="card-text">{{$guideTeacher->designation}}</p>
                                                            <a class="px-3" style="font-size:25px" href="tel:{{$guideTeacher->contact}}"><span title="{{$guideTeacher->contact}}"><i class="fas fa-mobile-alt"></i></span></a>
                                                            <a class="px-3" style="font-size:25px" href="mailto:{{$guideTeacher->email}}"><span title="{{$guideTeacher->email}}"><i class="fas fa-envelope"></i></span></a>
                                                            <a class="px-3" style="font-size:25px" href="{{$guideTeacher->fb}}"><i class="fab fa-facebook"></i></a>


                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
											@foreach($asstGuideTeachers as $asstGuideTeacher)
                                                <div class="col-5 pb-1">
                                                    <div class="card">
														<h2 class="card-header">Asst. Guide Teacher</h2>
                                                        <img class="card-img-top" src="{{asset($asstGuideTeacher->image)}}" alt="" height="150" width="120">
                                                        <div class="card-body">
                                                            <h4 class="card-title">{{$asstGuideTeacher->name}}</h4>
                                                            <h5 class="card-title">[{{$asstGuideTeacher->initial}}]</h5>
                                                            <p class="card-text">{{$asstGuideTeacher->designation}}</p>
                                                            <a class="px-3" style="font-size:25px" href="tel:{{$guideTeacher->contact}}"><span title="{{$guideTeacher->contact}}"><i class="fas fa-mobile-alt"></i></span></a>
                                                            <a class="px-3" style="font-size:25px" href="mailto:{{$guideTeacher->email}}"><span title="{{$guideTeacher->email}}"><i class="fas fa-envelope"></i></span></a>
                                                            <a class="px-3" style="font-size:25px" href="{{$guideTeacher->fb}}"><i class="fab fa-facebook"></i></a>


                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                            {{--<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">--}}
                                                           {{----}}
                                                {{--<div class="form-group row">--}}
                                                    {{--<label class="col-sm-3 col-form-label">Guide Teacher :</label>--}}
                                                    {{--@foreach($guideTeachers as $guideTeacher)--}}
                                                    {{--<div class="col-sm-5 col-form-label">{{$guideTeacher->guide_teacher}}</div>--}}
                                                    {{--@endforeach--}}
                                                    {{--<div class="col-sm-4 col-form-label">--}}
                                                        {{--Action--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> {{--tab3--}}
                    


                </div>   <!-- row    -->
             </div>  <!-- content --> 

    @endsection