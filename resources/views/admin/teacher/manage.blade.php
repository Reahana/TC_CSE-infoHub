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
   Manage Teacher
@endsection

@section('body')
<div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <h3 class=" my-5">All Teachers info tables goes here</h3>
                </div>
                <div class="ibox-body">
                    <div class="row row-cols-1 row-cols-md-3 my-3 g-4">
                          <div class="col">
                            <div class="card border-success">
                              <div class="card-body">
                                <h5 class="text-success"> Basic Informations</h5>
                              </div>
                             <div class="card-footer"><a href="{{route('teacher.manageBasic')}}" class="btn btn-success btn-block" > Manage</a> </div>
                            </div>
                          </div>

                         <div class="col">
                            <div class="card border-primary">
                              <div class="card-body">
                                <h5 class="text-primary"> Contact Informations</h5>
                              </div>
                             <div class="card-footer"><a href="{{route('teacher.manageContact')}}" class="btn btn-primary btn-block" > Manage</a> </div>
                            </div>
                          </div>

                        <div class="col">
                            <div class="card border-danger">
                                <div class="card-body">
                                    <h5 class="text-danger"> Guide Teachers</h5>
                                </div>
                                <div class="card-footer"><a href="{{route('guideTeacher.manage')}}" class="btn btn-danger btn-block" > Manage</a> </div>
                            </div>
                        </div>
                    </div>
 
                     </div>
             </div>
        </div>
</div>
@endsection