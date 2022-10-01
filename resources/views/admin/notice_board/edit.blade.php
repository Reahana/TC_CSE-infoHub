@extends('admin.master')
@section('title')
    Edit Notice
@endsection
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit Notice</div>
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
                    <form class="form-horizontal" action="{{route('notice.update',['id' => $notice->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Author Id</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="author_id" value="{{$notice->author_id}}" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Author Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="author" value="{{$notice->author}}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="title" value="{{$notice->title}}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Notice</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="notice" placeholder="Notice">{{$notice->notice}}</textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                                <img src="{{asset($notice->image)}}" alt="" height="60" width="80"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Notice</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection