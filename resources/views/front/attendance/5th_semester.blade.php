@extends('front.master')
@section('title')
    10B5S Students
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title"> Attendance of <b>10B5S</b>   </div>
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

                      
                            @foreach($attendances as $attendance)

                    
                        <form class="form-horizontal" action=" {{route('attendance.update',['id' => $attendance->id])}}" method="POST" >

                            @csrf
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label font-bold">Roll</label>
                                <label class="col-sm-2 col-form-label font-bold">Name</label>
                                <label class="col-sm-1 col-form-label font-bold">Section</label>
                                <label class="col-sm-2 col-form-label font-bold">Registration</label>
                                @foreach($teachers as $teacher)
                                   {{--// @if($teacher->t_id == auth()->user()->t_id || $teacher->t_id == auth()->user()->g_id  )--}}
                                        @if( $teacher->code ==530201 )
                                    <label class="col-sm-1 col-form-label font-bold">530201</label>
                                        @endif
                                        @if( $teacher->code ==530202 )
                                    <label class="col-sm-1 col-form-label font-bold">530202</label>
                                        @endif
                                        @if( $teacher->code ==530203 )
                                    <label class="col-sm-1 col-form-label font-bold">530203</label>
                                        @endif
                                        @if( $teacher->code ==530204 )
                                    <label class="col-sm-1 col-form-label font-bold">530204</label>
                                        @endif
                                        @if( $teacher->code ==530205 )
                                    <label class="col-sm-1 col-form-label font-bold">530205</label>
                                        @endif
                                        @if( $teacher->code ==530206 )
                                    <label class="col-sm-1 col-form-label font-bold">530206</label>
                                        @endif

                                        @if( $teacher->code ==530207 )
                                    <label class="col-sm-1 col-form-label font-bold">530207</label>
                                        @endif
										 {{--@endif--}}
                                   @endforeach

                                @if( isset($self->section) && $attendance->section == $self->section )
                                    <div class="col-sm-2">
                                        <label class="col-sm-1 col-form-label font-bold">Action</label>
                                    </div>

								 @endif
                                        
                            </div>

                            <div class="form-group row">
                               <div class="col-sm-2"><input class="form-control" type="number" name="roll" value="{{$attendance->roll}}" readonly  /></div>
                               <div class="col-sm-2"><input class="form-control" type="text" name="name" value="{{$attendance->name}}" readonly /></div>
                                <div class="col-sm-1"><input class="form-control" type="text" name="section" value="{{$attendance->section}}" readonly /></div>
                               <div class="col-sm-2"><input class="form-control" type="number" name="reg" value="{{$attendance->reg}}" readonly /></div>

                               @foreach($teachers as $teacher)

                               @if( $teacher->code ==530201 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530201"  onkeyup="this.value = minmax(this.value, 0, 100)"   value="{{$attendance->S3_530201}}"/></div>
                               @endif
                               @if( $teacher->code ==530202 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530202"  onkeyup="this.value = minmax(this.value, 0, 100)"  value="{{$attendance->S3_530202}}"/></div>
                               @endif
                               @if( $teacher->code ==530203 )

										   <div class="col-sm-1">
											   <input class="form-control" type="text" name="S3_530203" id="S3_530203" onkeyup="this.value = minmax(this.value, 0, 100)" value="{{$attendance->S3_530203}}" />
										   </div>
                               @endif
                               @if( $teacher->code ==530204)
                                       <div class="col-sm-1">
                                           <input class="form-control" type="text" name="S3_530204" id="S3_530204"  onkeyup="this.value = minmax(this.value, 0, 100)" value="{{$attendance->S3_530204}}" />
                                        </div>
                               @endif

                               @if( $teacher->code ==530205 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530205" onkeyup="this.value = minmax(this.value, 0, 100)"  value="{{$attendance->S3_530205}}" /></div>
                               @endif
                               @if( $teacher->code ==530206 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530206"  onkeyup="this.value = minmax(this.value, 0, 100)"  value="{{$attendance->S3_530206}}"/></div>
                               @endif


                               @if( $teacher->code ==530207 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530207" onkeyup="this.value = minmax(this.value, 0, 100)" value="{{$attendance->S3_530207}}" /></div>
                               @endif
                               @endforeach

                                @if( isset($self->section) && $attendance->section == $self->section )
                                    <div class="col-sm-2">
                                        <button class="btn btn-info"  type="submit">submit</button>
                                    </div>
                                @endif


                           </div>

                       </form>

                            @endforeach


               </div>
            </div>

        </div>
   </div>

@endsection