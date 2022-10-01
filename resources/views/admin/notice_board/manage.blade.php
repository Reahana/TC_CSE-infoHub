
    @extends('admin.master')

@section('title')
    Manage Notice
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Notice info goes here</div>
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
                    <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Author ID</th>
                            <th>Author Name</th>
                            <th>Title</th>
                            <th>Notice</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($notices as $notice)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$notice->author_id}}</td>
                                <td>{{$notice->author}}</td>
                                <td>{{$notice->title}}</td>
                                <td>{{$notice->notice}}</td>
                                <td><img src="{{asset($notice->image)}}" alt="" height="70" width="100"></td>


                                <td>
                                    <a href="{{route('notice.edit', ['id' => $notice->id])}}" class="btn btn-success btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('noticeDeleteForm{{$notice->id}}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('notice.delete', ['id' => $notice->id])}}" method="POST" id="noticeDeleteForm{{$notice->id}}">
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