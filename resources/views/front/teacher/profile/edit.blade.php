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
                    @foreach($teachers as $teacher)
                            <form class="form-horizontal" action="{{route('tea-profile.update',['id'=>$teacher->id])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Teacher ID</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="{{$teacher->t_id}}" name="t_id" readonly/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Teacher Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{$teacher->name}}" readonly/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Contact Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" value="{{$teacher->contact}}" name="contact" placeholder="Contact Number"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email"  value="{{$teacher->email}}" name="email" placeholder="Email"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Mailing Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="address" placeholder="Mailing Address">{{$teacher->address}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Facebook</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="url" name="fb" value="{{$teacher->fb}}" placeholder="Facebook"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Teacher Image</label>
                                    <div class="col-sm-10">
                                        <input class="form-control-file" type="file" name="image" accept="image/*"/>
                                        <img src="{{asset($teacher->image)}}" alt="" height="60" width="80"/>
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