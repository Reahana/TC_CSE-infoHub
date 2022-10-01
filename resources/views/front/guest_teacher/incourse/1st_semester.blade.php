@extends('front.master')
@section('title')
    12B1S Students
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title"> Students of <b>12B1S </b>   </div>
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
                    {{--@foreach($students as $student)--}}
                        @foreach($incourses as $incourse)
                        {{--<form class="form-horizontal" action="{{route('incourse.new')}}" method="POST" >--}}
                            <form class="form-horizontal" action=" {{route('incourse.update',['id' => $incourse->id])}}" method="POST" >
                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label font-bold">Roll</label>
                                <label class="col-sm-2 col-form-label font-bold">Name</label>
                                <label class="col-sm-1 col-form-label font-bold">Section</label>
                                <label class="col-sm-2 col-form-label font-bold">Registration</label>
                                @foreach($teachers as $teacher)
                                    @if($teacher->t_id == auth()->user()->t_id )
                                        @if( $teacher->code ==510201 )
                                            <label class="col-sm-1 col-form-label font-bold">510201</label>
                                        @endif
                                        @if( $teacher->code ==510202 )
                                            <label class="col-sm-1 col-form-label font-bold">510202</label>
                                        @endif
                                        @if( $teacher->code ==510203 )
                                            <label class="col-sm-1 col-form-label font-bold">510203</label>
                                        @endif
                                        @if( $teacher->code ==510204 )
                                            <label class="col-sm-1 col-form-label font-bold">510204</label>
                                        @endif
                                        @if( $teacher->code ==510205 )
                                            <label class="col-sm-1 col-form-label font-bold">510205</label>
                                        @endif
                                        @if( $teacher->code ==510207 )
                                            <label class="col-sm-1 col-form-label font-bold">510207</label>
                                        @endif
                                            @if( $teacher->code ==510209 )
                                                <label class="col-sm-1 col-form-label font-bold">510209</label>
                                            @endif
                                    @endif

                                @endforeach
                                <label class="col-sm-1 col-form-label font-bold">Action</label>
                            </div>
                            {{--@foreach($incourses as $incourse)--}}
                            <div class="form-group row">
                                <div class="col-sm-2"><input class="form-control" type="number" name="roll" value="{{$incourse->roll}}"  /></div>
                                <div class="col-sm-2"><input class="form-control" type="text" name="name" value="{{$incourse->name}}" /></div>
                                <div class="col-sm-1"><input class="form-control" type="text" name="section" value="{{$incourse->section}}" /></div>
                                <div class="col-sm-2"><input class="form-control" type="number" name="reg" value="{{$incourse->reg}}"/></div>
                                @foreach($teachers as $teacher)

                                    @if( $teacher->code ==510201 )
                                        <div class="col-sm-1"><input class="form-control" type="text" name="S1_510201" /></div>
                                    @endif
                                    @if( $teacher->code ==510202 )
                                        <div class="col-sm-1"><input class="form-control" type="text" name="S1_510202" /></div>
                                    @endif
                                    @if( $teacher->code ==510203 )

                                        <div class="col-sm-1"><input class="form-control" type="text" name="S1_510203" value="{{$incourse->S1_510203}}" /></div>

                                    @endif
                                    @if( $teacher->code ==510204)
                                        <div class="col-sm-1"><input class="form-control" type="text" name="S1_510204"  /></div>
                                    @endif

                                    @if( $teacher->code ==510205 )
                                        <div class="col-sm-1"><input class="form-control" type="text" name="S1_510205" /></div>
                                    @endif
                                    @if( $teacher->code ==510207 )
                                        <div class="col-sm-1"><input class="form-control" type="text" name="S1_510207" value="" /></div>
                                    @endif
                                        @if( $teacher->code ==510209 )
                                            <div class="col-sm-1"><input class="form-control" type="text" name="S1_510209" /></div>
                                        @endif
                                    {{--@endforeach--}}
                                @endforeach
                                <button class="btn btn-info" type="submit">submit</button>


                            </div>

                        </form>
                    @endforeach
                    {{--@endforeach--}}

                </div>
            </div>

        </div>
    </div>

@endsection