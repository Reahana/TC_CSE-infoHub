@extends('front.master')



@section('title')
    Teacher Desk
@endsection

@section('body')
	<div class="py-5">
	<h1 align="center" class="text-primary pb-5">Faculty of Dept of CSE</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($teachers as $teacher)
            <div class=" col-sm-3 col-md-2 pb-2">
                <div class="card mb-2">

                    <img class="card-img-top" src="{{asset($teacher->image)}}" alt="" height="150" width="120">
                    <div class="card-body">
                        <h4 class="card-title">{{$teacher->name}}</h4>
                        <h5 class="card-title">[{{$teacher->initial}}]</h5>
                        <p class="card-text">{{$teacher->designation}}
                        @if($teacher->t_id==10001)
                                <br>
                           <b>Chairman</b>
                            @endif
                        </p>

                        <a  style="font-size:25px" href="tel:{{$teacher->contact}}"><span title="{{$teacher->contact}}"><i class="fas fa-mobile-alt"></i></span></a>
                        <a class="pl-2" style="font-size:25px" href="mailto:{{$teacher->email}}"><span title="{{$teacher->email}}"><i class="fas fa-envelope"></i></span></a>
                        <a class="pl-2" style="font-size:25px" href="{{$teacher->fb}}" target="blank"><i class="fab fa-facebook"></i></a>
                        {{--<a class="pl-5 text-danger" style="font-size:30px" href="{{$teacher->fb}}"><i class=" fas fa-file"></i></a>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
        @if(auth()->user()->role_id==1)
        <h1 align="center" class="text-light bg-info my-5 py-2">Guest Teachers</h1>
        <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach($guestTeachers as $teacher)
        <div class="col-2 pb-1">
            <div class="card">

                <img class="card-img-top" src="{{asset($teacher->image)}}" alt="" height="150" width="120">
                <div class="card-body">
                    <h4 class="card-title">{{$teacher->name}}</h4>
                    <h5 class="card-title">[{{$teacher->initial}}]</h5>
                    <p class="card-text">{{$teacher->designation}}</p>
                    <a style="font-size:25px" href="tel:{{$teacher->contact}}"><span title="{{$teacher->contact}}"><i class="fas fa-mobile-alt"></i></span></a>
                    <a class="pl-2" style="font-size:25px" href="mailto:{{$teacher->email}}"><span title="{{$teacher->email}}"><i class="fas fa-envelope"></i></span></a>
                    <a class="pl-2" style="font-size:25px" href="{{$teacher->fb}}"><i class="fab fa-facebook"></i></a>
                     {{--<a class="pl-5 text-danger" style="font-size:30px" href="{{$teacher->fb}}"><i class=" fas fa-file"></i></a>--}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
            @endif
</div>
    
@endsection