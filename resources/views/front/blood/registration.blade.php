@extends('front.master')

@section('title')
    Donor Registration
@endsection


@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-5">
                <div class="ibox-head">
                    <div class="ibox-title">Add Donor Form</div>
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
                    <form class="form-horizontal" action="{{route('new.donor')}}" method="POST">
                        @csrf
                        @if(auth()->user()->role_id==1)
                            @foreach($students as $student)
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Roll</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="donor_id" value="{{$student->roll}}"  />
                            </div>
                        </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{$student->name}}" />
                                    </div>
                                </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="contact" value="{{$student->contact}}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="address">{{$student->address}}</textarea>
                                </div>
                            </div>
                            @endforeach
                        @elseif(auth()->user()->role_id==2)
                                    @foreach($teachers as $teacher)
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Teacher ID</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="donor_id" value="{{$teacher->t_id}}" />
                            </div>
                        </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{$teacher->name}}" />
                                    </div>
                                </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Contact Number</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="contact" value="{{$teacher->contact}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" name="address">{{$teacher->address}}</textarea>
                        </div>
                        </div>
                                    @endforeach
                                @endif
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blood Group</label>
                            <div class="col-sm-10">
                                @foreach($students as $student)
                                {{--@foreach($donors as $donor)--}}

                                        {{--@if($student->roll == $donor->donor_id)--}}

                                   {{--<label><input type="radio" {{$donor->blood  == "AB+" ? 'checked' : '' }} name="blood" value="AB+"/> AB+   </label>--}}
                                {{--<label><input type="radio" {{$donor->blood  == "AB-" ? 'checked' : '' }} name="blood" value="AB-"/> AB-  </label>--}}
                                {{--<label><input type="radio" {{$donor->blood  == "O+" ? 'checked' : '' }} name="blood" value="O+"/>  O+  </label>--}}
                                {{--<label><input type="radio" {{$donor->blood  == "O-" ? 'checked' : '' }} name="blood" value="O-"/>  O-  </label>--}}
                                {{--<label><input type="radio" {{$donor->blood  == "A+" ? 'checked' : '' }} name="blood" value="A+"/> A+  </label>--}}
                                {{--<label><input type="radio" {{$donor->blood  == "A-" ? 'checked' : '' }} name="blood" value="A-"/>  A-  </label>--}}
                                {{--<label><input type="radio" {{$donor->blood  == "B+" ? 'checked' : '' }} name="blood" value="B+"/> B+  </label>--}}
                                {{--<label><input type="radio" {{$donor->blood  == "B-" ? 'checked' : '' }} name="blood" value="B-"/> B-   </label>--}}

                                        {{--@endif--}}
                                    {{--@endforeach--}}
                                            <label><input type="radio" {{$student->blood  == "AB+" ? 'checked' : '' }} name="blood" value="AB+"/> AB+   </label>
                                            <label><input type="radio" {{$student->blood  == "AB-" ? 'checked' : '' }} name="blood" value="AB-"/> AB-  </label>
                                            <label><input type="radio" {{$student->blood  == "O+" ? 'checked' : '' }} name="blood" value="O+"/>  O+  </label>
                                            <label><input type="radio" {{$student->blood  == "O-" ? 'checked' : '' }} name="blood" value="O-"/>  O-  </label>
                                            <label><input type="radio" {{$student->blood  == "A+" ? 'checked' : '' }} name="blood" value="A+"/> A+  </label>
                                            <label><input type="radio" {{$student->blood  == "A-" ? 'checked' : '' }} name="blood" value="A-"/>  A-  </label>
                                            <label><input type="radio" {{$student->blood  == "B+" ? 'checked' : '' }} name="blood" value="B+"/> B+  </label>
                                            <label><input type="radio" {{$student->blood  == "B-" ? 'checked' : '' }} name="blood" value="B-"/> B-   </label>

                                @endforeach
                                @foreach($teachers as $teacher)
                                    <label><input type="radio" {{$teacher->blood  == "AB+" ? 'checked' : '' }} name="blood" value="AB+"/> AB+   </label>
                                    <label><input type="radio" {{$teacher->blood  == "AB-" ? 'checked' : '' }} name="blood" value="AB-"/> AB-  </label>
                                    <label><input type="radio" {{$teacher->blood  == "O+" ? 'checked' : '' }} name="blood" value="O+"/>  O+  </label>
                                    <label><input type="radio" {{$teacher->blood  == "O-" ? 'checked' : '' }} name="blood" value="O-"/>  O-  </label>
                                    <label><input type="radio" {{$teacher->blood  == "A+" ? 'checked' : '' }} name="blood" value="A+"/> A+  </label>
                                    <label><input type="radio" {{$teacher->blood  == "A-" ? 'checked' : '' }} name="blood" value="A-"/>  A-  </label>
                                    <label><input type="radio" {{$teacher->blood  == "B+" ? 'checked' : '' }} name="blood" value="B+"/> B+  </label>
                                    <label><input type="radio" {{$teacher->blood  == "B-" ? 'checked' : '' }} name="blood" value="B-"/> B-   </label>
                                @endforeach

                                {{--<label><input type="radio"  name="blood" value="AB+"/> AB+   </label>--}}
                                {{--<label><input type="radio"  name="blood" value="AB-"/> AB-  </label>--}}
                                {{--<label><input type="radio"  name="blood" value="O+"/>  O+  </label>--}}
                                {{--<label><input type="radio"  name="blood" value="O-"/>  O-  </label>--}}
                                {{--<label><input type="radio"  name="blood" value="A+"/> A+  </label>--}}
                                {{--<label><input type="radio"  name="blood" value="A-"/>  A-  </label>--}}
                                {{--<label><input type="radio"  name="blood" value="B+"/> B+  </label>--}}
                                {{--<label><input type="radio"  name="blood" value="B-"/> B-   </label>--}}
                            </div>
                        </div>

                        {{--<div class="form-group row">--}}
                            {{--<label class="col-sm-2 col-form-label">Status</label>--}}
                            {{--<div class="col-sm-10">--}}
                                {{--@foreach($donors as $donor)--}}
                                {{--<label><input type="radio" selected {{$donor->status  == "Available" ? 'checked' : '' }} name="status" value="Available" /> Available</label>--}}
                                {{--<label><input type="radio" {{$donor->status  == "Unavailable" ? 'checked' : '' }}name="status" value="Unavailable"/> Unavailable</label>--}}
                                {{--@endforeach--}}


                                {{--<label><input type="radio" checked  name="status" value="Available" /> Available</label>--}}
                                {{--<label><input type="radio" name="status" value="Unavailable"/> Unavailable</label>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-success btn-block" type="submit">Add Donor</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
