@extends('front.master')

@section('title')
    Blood Bank
@endsection

@section('body')
    <section class="bg-dark  py-5   mt-4 ">
        <div class="container">
            @if($message = Session::get('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{$message}}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row ">
                <div class="col-md-12">

                    <h1 class="mb-5  bg-danger text-light text-center">Blood Bank</h1>
                </div>
                <div class="col-md-12 ">

                    <img src="{{asset('/')}}assets/images/blood_donor.jpg" alt="" width="100px" >

                                <a href=" {{route('donor.reg')}}" class="btn btn-success ml-5   btn-lg">Register as Donor</a>

                    @if(auth()->user()->role_id==1)
                        <a href="{{route('add.studentBg')}}" class="btn btn-primary ml-5   btn-lg">Add Blood Group</a>
                    @elseif(auth()->user()->role_id==2)
                        <a href="{{route('add.teacherBg')}}" class="btn btn-primary ml-5   btn-lg">Add Blood Group</a>
                    @endif

                    @foreach($donors as $donor)
                        @if(auth()->user()->t_id== $donor->donor_id || auth()->user()->roll== $donor->donor_id )
                            <a href=" {{route('donor.edit')}}" class="btn btn-light ml-5   btn-lg">Edit Status </a>
                        @endif
                    @endforeach

                </div>


                <div class="col-md-12">
                    <h1 class="mt-4 py-2  text-light text-center">  Find Donor ? </h1>
                </div>
                <div class="col-md-3 pt-3 pl-4">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('donor.abP')}}" class="btn btn-lg btn-danger">AB+</a>
                            <a href="{{route('donor.abN')}}" class="btn btn-lg btn-info">AB-</a>
                    </div>
                </div>


                <div class="col-md-3 pt-3 pl-4">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('donor.oP')}}" class="btn btn-lg btn-danger">O+</a>
                            <a href="{{route('donor.oN')}}" class="btn btn-lg btn-info">O-</a>
                    </div>
                </div>


                <div class="col-md-3 pt-3">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('donor.aP')}}" class="btn btn-lg btn-danger">A+</a>
                        <a href="{{route('donor.aN')}}" class="btn btn-lg btn-info">A-</a>
                    </div>
                </div>


                <div class="col-md-3 pt-3   ">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{route('donor.bP')}}" class="btn btn-lg btn-danger">B+</a>
                        <a href="{{route('donor.bN')}}" class="btn btn-lg btn-info">B-</a>
                    </div>
                </div>




                <div class="col-md-12 pt-5">
                    <h1 class="mb-5  text-light text-center">Blood Group List</h1>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5  ">
                    <a href="{{route('view.studentBg')}}">
                        <img src="{{asset('/')}}assets/images/student.jpg" alt="" width="150px" >
                    </a>
                    <h3 class=" text-light">Student List</h3>
                </div>

                <div class="col-md-5 ">
                    <a href="{{route('view.teacherBg')}}">
                        <img src="{{asset('/')}}assets/images/teacher.jpg" alt="" width="150px" >
                    </a>
                    <h3 class=" text-light">Teacher List</h3>
                </div>

            </div>
        </div>
    </section>
@endsection