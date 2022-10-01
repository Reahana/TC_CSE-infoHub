@extends('admin.master')

@section('title')
   Edit PDF
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">Edit PDF Form</div>
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
                    <form class="form-horizontal" action="{{route('pdf.update',['id' => $pdf->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="{{$pdf->name}}"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Thumnail Image</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="image" accept="image/*"/>
                                <img src="{{asset($pdf->image)}}" alt="" height="60" width="80"/>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label"> Book</label>
                            <div class="col-sm-10">
                                <input class="form-control-file" type="file" name="book" accept=".pdf"/>
                                <embed src="{{asset($pdf->book)}}"  width="100%" height="100px" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 ml-sm-auto">
                                <button class="btn btn-warning btn-block" type="submit">Update Book</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection