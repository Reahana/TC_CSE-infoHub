@extends('front.master')

@section('title')
    Edit Donor
@endsection


@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-5">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Donor Form</div>
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
                        @foreach($donors as $donor)
                    <form class="form-horizontal" action="{{route('donor.update', ['id' => $donor->id])}}" method="POST">
                        @csrf

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Donor_Id</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="donor_id" value="{{$donor->donor_id}}" disabled  />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{$donor->name}}" disabled/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Contact Number</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="number" name="contact" value="{{$donor->contact}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="address">{{$donor->address}}</textarea>
                                    </div>
                                </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Blood Group</label>
                            <div class="col-sm-10">
                                    <label><input type="radio" {{$donor->blood  == "AB+" ? 'checked' : '' }} name="blood" value="AB+"/> AB+   </label>
                                    <label><input type="radio" {{$donor->blood  == "AB-" ? 'checked' : '' }} name="blood" value="AB-"/> AB-  </label>
                                    <label><input type="radio" {{$donor->blood  == "O+" ? 'checked' : '' }} name="blood" value="O+"/>  O+  </label>
                                    <label><input type="radio" {{$donor->blood  == "O-" ? 'checked' : '' }} name="blood" value="O-"/>  O-  </label>
                                    <label><input type="radio" {{$donor->blood  == "A+" ? 'checked' : '' }} name="blood" value="A+"/> A+  </label>
                                    <label><input type="radio" {{$donor->blood  == "A-" ? 'checked' : '' }} name="blood" value="A-"/>  A-  </label>
                                    <label><input type="radio" {{$donor->blood  == "B+" ? 'checked' : '' }} name="blood" value="B+"/> B+  </label>
                                    <label><input type="radio" {{$donor->blood  == "B-" ? 'checked' : '' }} name="blood" value="B-"/> B-   </label>
                               </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$donor->status  == "Available" ? 'checked' : '' }} name="status" value="Available" /> Available</label>
                                <label><input type="radio" {{$donor->status  == "Unavailable" ? 'checked' : '' }} name="status" value="Unavailable" /> Unavailable</label>
                                </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-success btn-block" type="submit">Edit Donor</button>
                            </div>
                        </div>
                    </form>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
