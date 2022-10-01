@extends('front.master')

@section('brand')
    <a class="link" href="{{route('student-dashboard')}}">
            <span class="brand">
                <span class="brand-tip">Student Dashboard</span>
            </span>
        <span class="brand-mini">SD</span>
    </a>
@endsection

@section('dashboard')
    {{route('student-dashboard')}}
@endsection

@section('title')
   Library
@endsection

@section('body')
    <div class=" py-5 row row-cols-1 row-cols-md-2 g-4">
        @foreach($pdfs as $pdf)
            <div class=" col-sm-3 col-md-2 pb-1">
                <div class="card">

                    <img class="card-img-top" src="{{asset($pdf->image)}}" alt="" height="150" width="120">
                    <div class="card-body">
                        <h4 class="card-title">{{$pdf->name}}</h4>
                        <a href="{{$pdf->book}}" download="{{$pdf->name}}" class="btn btn-danger">Download <i class="fa fa-download"></i> </a>

                    </div>
                </div>
            </div>

          
        @endforeach
    </div>
@endsection