@extends('front.master')

@section('brand')
    <a class="link" href="{{route('teacher-dashboard')}}">
            <span class="brand">Teacher
                <span class="brand-tip">Dashboard</span>
            </span>
        <span class="brand-mini">TD</span>
    </a>
@endsection

@section('dashboard')
    {{route('teacher-dashboard')}}
@endsection

@section('title')
   Library
@endsection
@section('menu')
    @include('front.includes.teacherMenu')
@endsection
@section('body')
    <div class=" py-5 row row-cols-1 row-cols-md-2 g-4">
        @foreach($pdfs as $pdf)
            <div class="col">
                <div class="card">

                    {{--<img src="{{asset($teacher->image)}}" alt="" height="150" width="120">--}}
                    <div class="card-body">
                        {{--<h4 class="card-title">{{$teacher->name}}</h4>--}}
                        {{--<h5 class="card-title">[{{$teacher->initial}}]</h5>--}}
                        {{--<p class="card-text">{{$teacher->designation}}</p>--}}
                        {{--<a href="tel:{{$teacher->contact}}"><span title="{{$teacher->contact}}"><i class="fas fa-mobile-alt"></i></span></a>--}}
                        {{--<a href="mailto:{{$teacher->email}}"><span title="{{$teacher->email}}"><i class="fas fa-envelope"></i></span></a>--}}
                        {{--<a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>--}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection