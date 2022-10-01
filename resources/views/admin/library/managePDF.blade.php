@extends('admin.master')

@section('title')
   Manage PDF
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All PDFs info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Title</th>
                            <th>Thumnail</th>
                            <th>PDF</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pdfs as $pdf)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$pdf->name}}</td>
                                <td><img src="{{asset($pdf->image)}}" alt="" height="100" width="100"></td>
                                <td><embed src="{{$pdf->book}}" type="application/pdf" width="100%" height="100px" /></td>

                               <td>
                                    <a href="{{route('pdf.edit', ['id' => $pdf->id])}}" class="btn btn-success btn-xs">
                                       <i class="fa fa-edit"></i>
                                   </a>
                                   <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('pdfDeleteForm{{$pdf->id}}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                   <form action="{{route('pdf.delete', ['id' => $pdf->id])}}" method="POST" id="pdfDeleteForm{{$pdf->id}}">
                                        @csrf
                                    </form>
                               </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection