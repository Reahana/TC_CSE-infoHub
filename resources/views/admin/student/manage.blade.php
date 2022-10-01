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
    Manage Student
@endsection

@section('body')

	<div class="row">
            <div class="col-md-12">
                <div class="ibox mt-3">
               	    <div class="ibox-head">
                        <h3 class=" my-5">All Students info tables goes here</h3>
                    </div>
                    <div class="ibox-body">
  		       <div class="row row-cols-1 row-cols-md-2 g-4 my-3 ">
             	           
			  <div class="col-md-4" >
     			      <div class="card border-success">
      			         <div class="card-body">
                                     <h5 class="text-success"> Basic Informations</h5>
               			 </div>
     			         <div class="card-footer"><a href="{{route('student.manageBasic')}}" class="btn btn-success btn-block" > Manage</a> </div>
    			    </div>
  			  </div>

			  <div class="col-md-4">
    			     <div class="card border-danger">
      				<div class="card-body">
             			    <h5 class="text-danger"> Academic Info</h5>
      				</div>
     				<div class="card-footer"><a href="{{route('student.manageAcademic')}}" class="btn btn-danger btn-block" > Manage</a> </div>
    			     </div>
  			  </div>

 			  <div class="col-md-4">
    			      <div class="card border-primary">
      			          <div class="card-body">
        			      <h5 class="text-primary"> Contact Informations</h5>
      				  </div>
     				  <div class="card-footer"><a href="{{route('student.manageContact')}}" class="btn btn-primary btn-block" > Manage</a> </div>
    			      </div>
  			   </div>

   		       </div>
  		   </div>
  	       </div>
	   </div>
	</div>
@endsection