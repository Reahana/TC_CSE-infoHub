@extends('front.master')
@section('title')
    10B5S Students
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Incourse Marks of <b>10B5S</b>   </div>
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
                                   
									@endforeach
											


                                    @if( isset($self->section) && $incourse->section == $self->section )

                                <label class="col-sm-1 col-form-label font-bold">Action</label>
                                
								 @endif
                                        
                            </div>

                            <div class="form-group row">
                               <div class="col-sm-2"><input class="form-control" type="number" name="roll" value="{{$incourse->roll}}" readonly /></div>
                               <div class="col-sm-2"><input class="form-control" type="text" name="name" value="{{$incourse->name}}" readonly /></div>
                                <div class="col-sm-1"><input class="form-control" type="text" name="section" value="{{$incourse->section}}" readonly/></div>
                               <div class="col-sm-2"><input class="form-control" type="number" name="reg" value="{{$incourse->reg}}" readonly/></div>

                               @foreach($teachers as $teacher)

                               @if( $teacher->code ==530201 )
                                        <div class="col-sm-1"><input class="form-control" type="text" name="S3_530201" onkeyup="this.value = minmax(this.value, 0, 20)" value="{{$incourse->S3_530201}}"/></div>
                                    @endif
                               @if( $teacher->code ==530202 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530202" onkeyup="this.value = minmax(this.value, 0, 40)" value="{{$incourse->S3_530202}}"/></div>
                               @endif
                               @if( $teacher->code ==530203 )

                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530203" onkeyup="this.value = minmax(this.value, 0, 20)" value="{{$incourse->S3_530203}}"  /></div>

                               @endif
                               @if( $teacher->code ==530204)
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530204"  onkeyup="this.value = minmax(this.value, 0, 40)" value="{{$incourse->S3_530204}}"  /></div>
                               @endif

                               @if( $teacher->code ==530205 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530205"  onkeyup="this.value = minmax(this.value, 0, 20)" value="{{$incourse->S3_530205}}"/></div>

                               @endif
                               @if( $teacher->code ==530206 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530206" onkeyup="this.value = minmax(this.value, 0, 40)" value="{{$incourse->S3_530206}}" /></div>
                               @endif
                               @if( $teacher->code ==530207 )
                               <div class="col-sm-1"><input class="form-control" type="text" name="S3_530207" onkeyup="this.value = minmax(this.value, 0, 20)"  value="{{$incourse->S3_530207}}" /></div>
                               @endif

									@endforeach

                                @if( isset($self->section) && $incourse->section == $self->section )

                               <button class="btn btn-info" type="submit">submit</button>
                                @endif

                           </div>

                       </form>

                        @endforeach
               </div>
            </div>

        </div>
   </div>

@endsection