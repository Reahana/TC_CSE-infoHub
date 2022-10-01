@extends('admin.master')
@section('brand')

    <a class="link" href="{{route('dashboard')}}">
            <span class="brand">Admin
                <span class="brand-tip">Dashboard</span>
            </span>
        <span class="brand-mini">AD</span>
    </a>

@endsection
@section('title')
  Edit Student
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
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{$message}}!</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <form class="form-horizontal" action="{{route('student.updateBasic',['id'=>$student->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
		 <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Roll Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" value="{{$student->roll}}" name="roll" placeholder="Roll Number"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Student Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" value="{{$student->name}}" name="name" placeholder="Student Name"/>
                        </div>
                    </div>
		    
 		    
		    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Session</label>
                        <div class="col-sm-10">
				<select class="form-control" name="session">
                                    <option> -- Select Session -- </option>
                                   @foreach($batches as $batch)
					<option value="{{$batch->session}}"{{$batch->session==$student->session ? 'selected' : ''}}>{{$batch->session}}</option>
                                  @endforeach
                                </select>
                          
                        </div>
                    </div>
		    
		
              
		     
		   <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$student->gender == "male" ? 'checked' : '' }}  name="gender" value="male"/> Male</label>
                                <label><input type="radio" {{$student->gender == "female" ? 'checked' : '' }}  name="gender" value="female"/> Female</label>
                            </div>
                        </div>
		
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Student Type</label>
                            <div class="col-sm-10">
                                <label><input type="radio" {{$student->type == "regular" ? 'checked' : '' }} name="type" value="regular"/> Regular</label>
                                <label><input type="radio" {{$student->type == "irregular" ? 'checked' : '' }} name="type" value="irregular"/> Irregular</label>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Student Image</label>
                        <div class="col-sm-10">
                            <input class="form-control-file" type="file" name="image" accept="image/*"/>
			   <img src="{{asset($student->image)}}" alt="" height="60" width="80"/>
                        </div>
                    </div>
                 
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-warning btn-block" type="submit">Update Student Basic</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
