@extends('admin.master')

@section('title')
   Admin Dashboard
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
        {{--<h1 class="page-title text-center">Welcome {{auth()->user()->name}}</h1>--}}
    </div>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col-md-3 col-sm-6 ">
            <div class="card text-white bg-danger  my-5 ml-3" style="max-width: 18rem;">
                <div class="card-header">SEMESTER</div>
                <div class="card-body">
                    <h5 class="card-title">Total <b>{{$semester}}</b> Semesters </h5>
                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="card text-white bg-success my-5  " style="max-width: 18rem;">
                <div class="card-header">BATCH</div>
                <div class="card-body">
                    <h5 class="card-title"><b>{{$batch}}</b>  Batches are running</h5>
                    {{--<p class="card-text">9th <br> 10th<br>11th<br> 12th</p>--}}
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="card  text-white bg-primary my-5" style="max-width: 18rem;">
                <div class="card-header">Courses</div>
                <div class="card-body">
                    <h5 class="card-title">Total :{{$course}}</h5>

                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="card text-white bg-warning my-5" style="max-width: 18rem;">
                <div class="card-header">Room</div>
                <div class="card-body">
                    <h5 class="card-title">Total Classroom :{{$class}}</h5>
                    <h5 class="card-title">Total Hardware Lab :{{$hardware}}</h5>
                    <h5 class="card-title">Total Software Lab :{{$software}}</h5>
                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="card  text-white bg-info my-5 ml-3" style="max-width: 18rem;">
                <div class="card-header">TEACHERS</div>
                <div class="card-body">
                    <h5 class="card-title">Total Faculty :{{$teacher}}</h5>
                    <h5 class="card-title">Guest Teacher :{{$guestTeacher}}</h5>
                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 ">
            <div class="card text-white bg-dark  my-5" style="max-width: 18rem;">
                <div class="card-header">STUDENTS</div>
                <div class="card-body">
                    <h5 class="card-title">Total {{$student}} </h5>
                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 ">
            <div class="card text-white bg-secondary my-5" style="max-width: 18rem;">
                <div class="card-header">OTHERS</div>
                <div class="card-body">
                    <h5 class="card-title">Routine</h5>
                    <h5 class="card-title">Library</h5>
                    <h5 class="card-title">Notice Board</h5>
                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 ">
            <div class="card text-dark bg-light my-5" style="max-width: 18rem;">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <h5 class="card-title">Admin {{$admin}}</h5>
                    <h5 class="card-title">Teacher: {{$user_teacher}}</h5>
                    <h5 class="card-title">Guest Teacher: {{$guest_teacher}}</h5>
                    <h5 class="card-title">Student: {{$user_student}}</h5>

                    {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                </div>
            </div>
        </div>

    </div>

@endsection