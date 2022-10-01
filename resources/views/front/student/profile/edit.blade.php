@extends('front.master')
@section('title')
   Edit Profile
@endsection


@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Student Form</div>
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
                    <form class="form-horizontal" action="{{route('stu-profile.update',['id'=>$student->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Roll Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" value="{{$student->roll}}" name="roll" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Student Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$student->name}}" name="name" disabled/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Father's Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$student->father_name}}" name="father_name" placeholder="Father's Name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mother's Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" value="{{$student->mother_name}}" name="mother_name" placeholder="Mother's Name" />
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Date of Birth </label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="{{$student->dob}}" name="dob" />
                        </div>
                </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Contact Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="contact" value="{{$student->contact}}" placeholder="Contact Number"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="{{$student->email}}" placeholder="Email"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mailing Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Mailing Address">{{$student->address}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="url" name="fb" value="{{$student->fb}}" placeholder="Facebook"/>
                            </div>
                        </div>
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 col-form-label">Skills: </label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<textarea class="form-control"  name="skill" id="" cols="50" rows="5">{{$student->skill}}</textarea>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 col-form-label">Blood Group</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--<label><input type="radio" {{$student->blood == "AB+" ? 'checked' : '' }} name="bg" value="AB+"/> AB+   </label>--}}
                                {{--<label><input type="radio" {{$student->blood == "AB-" ? 'checked' : '' }} name="bg" value="AB-"/> AB-  </label>--}}
                                {{--<label><input type="radio" {{$student->blood == "O+" ? 'checked' : '' }} name="bg" value="O+"/>  O+  </label>--}}
                                {{--<label><input type="radio" {{$student->blood == "O-" ? 'checked' : '' }} name="bg" value="O-"/>  O-  </label>--}}
                                {{--<label><input type="radio" {{$student->blood == "A+" ? 'checked' : '' }} name="bg" value="A+"/> A+  </label>--}}
                                {{--<label><input type="radio" {{$student->blood == "A-" ? 'checked' : '' }} name="bg" value="A-"/>  A-  </label>--}}
                                {{--<label><input type="radio" {{$student->blood == "B+" ? 'checked' : '' }} name="bg" value="B+"/> B+  </label>--}}
                                {{--<label><input type="radio" {{$student->blood == "B-" ? 'checked' : '' }} name="bg" value="B-"/> B-   </label>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Student Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                                <img src="{{asset($student->image)}}" alt="" height="60" width="80"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-success btn-block" type="submit">Update</button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection