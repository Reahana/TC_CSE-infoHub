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
    Add New student
@endsection

@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="ibox mt-3">
            <div class="ibox-head">
                <div class="ibox-title">Add Student Form</div>
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
                <form class="form-horizontal" action="{{route('student.new')}}" method="POST" enctype="multipart/form-data">
                    @csrf
		 <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Roll Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="roll" placeholder="Roll Number"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Student Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" placeholder="Student Name"/>
                        </div>
                    </div>
		    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Registration Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="reg" placeholder="Reg No"/>
                        </div>
                    </div>
 		    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Batch</label>
                        <div class="col-sm-10">
				<select class="form-control" name="batch" id="batch">
                                    <option> -- Select Batch -- </option>
                                   @foreach($batches as $batch)
                                       <option value="{{$batch->batch}}">{{$batch->batch}}</option>
                                  @endforeach
                                </select>
                            
                        </div>
                    </div>
		    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Session</label>
                        <div class="col-sm-10">
				<select class="form-control" name="session" id="session">
                                    <option> -- Select Session -- </option>
                                   @foreach($batches as $batch)
                                       <option value="{{$batch->session}}">{{$batch->session}}</option>
                                  @endforeach
                                </select>
                          
                        </div>
                    </div>
		    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Section</label>
                        <div class="col-sm-10">
                             <label><input type="radio" name="section" value="A"/> A</label>
                                <label><input type="radio" name="section" value="B"/> B</label>
                        </div>
                    </div>
		<div class="form-group row">
                            <label class="col-sm-2 col-form-label">Semester</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="semester" id="semester">
                                    <option> -- Select Semester -- </option>
                                   @foreach($semesters as $semester)
                                       <option value="{{$semester->name}}">{{$semester->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div>
		     
		   <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Gender</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="gender" value="male"/> Male</label>
                                <label><input type="radio" name="gender" value="female"/> Female</label>
                            </div>
                        </div>
			<div class="form-group row">
                        <label class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="number" name="contact" placeholder="Contact Number"/>
                        </div>
                    </div>
		    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" name="email" placeholder="Email"/>
                        </div>
                    </div>
		  <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Mailing Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" placeholder="Mailing Address"></textarea>
                            </div>
                        </div>
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Student Type</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="type" value="regular"/> Regular</label>
                                <label><input type="radio" name="type" value="irregular"/> Irregular</label>
                            </div>
                        </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Student Image</label>
                        <div class="col-sm-10">
                            <input class="form-control-file" type="file" name="image" accept="image/*"/>
                        </div>
                    </div>
                  
                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-info btn-block" type="submit">Add New Student</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection