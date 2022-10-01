@extends('front.master')

@section('title')
    View Profile
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-4 mx-3 py-3">
                <div class="ibox-head">
                    <div class="font-bold font-26 text-info">Student Profile</div>
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
                        @foreach($students as $student)
                    <table class="table table-bordered font-20" >
                        <tbody >
                            <tr>
                                <th width="25%">Roll Number</th>
                                <td colspan="2" >{{$student->roll}}</td>
                                <td rowspan="3" ><img src="{{asset($student->image)}}" alt="" width="120" height="150"></td>
                            </tr>
                            <tr>
                                <th>Student Name</th>
                                <td colspan="2">{{$student->name}}</td>
                            </tr>
                            <tr>
                                <th>Registration Number</th>
                                <td colspan="2">{{$student->reg}}</td>
                            </tr>
                            <tr>
                                <th >Session</th>
                                <td>{{$student->session}}</td>
                                <th width="25%">Batch</th>
                                <td width="25%">{{$student->batch}}</td>
                            </tr>
                            <tr>
                                <th>Semester</th>
                                <td>{{$student->semester}}</td>
                                <th >Section</th>
                                <td >{{$student->section}}</td>
                            </tr>
                            <tr>
                                <th>Student Type</th>
                                <td>{{$student->type}}</td>
                                <th >Gender</th>
                                <td >{{$student->gender}}</td>
                            </tr>
                            <tr>
                                <th >Father's Name</th>
                                <td >{{$student->father_name}}</td>
                                <th >Mother's Name</th>
                                <td >{{$student->mother_name}}</td>

                            </tr>
                            <tr>

                            </tr>

                            <tr>
                                <th >Date of Birth</th>
                                <td >{{$student->dob}}</td>
                                <th width="25%">Blood Group</th>
                                <td width="25%">{{$student->blood}}</td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td>{{$student->contact}}</td>
                                <th >Email</th>
                                <td >{{$student->email}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td colspan="3">{{$student->address}}</td>
                            </tr>

                            <tr>
                                <th>Skill</th>
                                <td colspan="3">{{$student->skill}}</td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection