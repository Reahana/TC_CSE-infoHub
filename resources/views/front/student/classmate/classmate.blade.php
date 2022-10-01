@extends('front.master')

@section('title')
    Classmates
    @endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="font-20 "> Classmates </div>
                </div>
                <div class="ibox-body">
                    @if($message = Session::get('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{$message}}!</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="500%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Roll</th>
                            <th>Name</th>
                            <th>Reg</th>
                            <th>Section</th>
                            <th>Image</th>
                            <th>Contact</th>
                            {{--<th>Action</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->roll}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->reg}}</td>
                                <td>{{$student->section}}</td>
                                <td><img src="{{asset($student->image)}}" alt="" height="70" width="100"></td>
                                <td>
                                    <div class="profile-social m-b-20" style="font-size:30px">
                                        <a  href="{{$student->fb}}" target="_blank"><i  class="fab fa-facebook "></i></a>
                                        <a  href="tel:{{$student->contact}}"><span title="{{$student->contact}}"><i  class="fas fa-mobile-alt"></i></span></a>
                                        <a href="mailto:{{$student->email}}"><span title="{{$student->email}}"><i  class="fas fa-envelope"></i></span></a>
                                    </div>
                                </td>
                                {{--<td>--}}
                                    {{--<a  href="{{route('student.view',['id' => $student->id])}}" class="btn btn-secondary ">View Profile</a>--}}
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