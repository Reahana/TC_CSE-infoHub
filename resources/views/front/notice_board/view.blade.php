@extends('front.master')
@section('title')
    Notice Board
@endsection

@section('body')
    @if($message = Session::get('message'))
        <div class="mt-5 alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{$message}}!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <h1 class="my-5 text-center  text-danger"><span class="p-3 font-bold bg-white">
            <i class=" sidebar-item-icon fas fa-chalkboard"></i> Notice Board</span></h1>
    @foreach($notices as $notice)
        @if($notice->image != '')
        <div class="card my-5 " style="margin-left:15rem; width: 60rem;" >
            <div class="card-header font-26">
                <div class="row">
                    <div class="col-sm-10">{{$notice->title}}</div>
                    @if(auth()->user()->t_id == $notice->author_id)
                        <div class="col-sm-2">
                            <a href="{{route('edit.notice', ['id' => $notice->id])}}" class="btn btn-success btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('noticeDeleteForm{{$notice->id}}').submit();">
                                <i class="fa fa-trash"></i>
                            </a>
                            <form action="{{route('notice.delete', ['id' => $notice->id])}}" method="POST" id="noticeDeleteForm{{$notice->id}}">
                                @csrf
                            </form>
                        </div>
                    @endif
                </div>
            </div>
            <img src="{{asset($notice->image)}}" class="card-img-top" alt="..."  width="100%" >
                <div class="card-body">
                <p class="card-text font-20">{{$notice->notice}} </p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-7 font-20 ">posted by: <span class="text-primary">{{$notice->author}}</span> </div>
                        <p class="col-sm-5 font-18  ">posted at: <span class="text-secondary">{{$notice->created_at}}</span> </p>
                    </div>

                </div>
        </div>
            @else
            <div class="card my-5  " style="margin-left:15rem; width: 60rem;" >
                <div class="card-header font-26 ">
                    <div class="row">
                        <div class="col-sm-10">{{$notice->title}}</div>
                        @if(auth()->user()->t_id == $notice->author_id || auth()->user()->g_id == $notice->author_id)
                        <div class="col-sm-2">
                            <a href="{{route('edit.notice', ['id' => $notice->id])}}" class="btn btn-success btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('noticeDeleteForm{{$notice->id}}').submit();">
                                <i class="fa fa-trash"></i>
                            </a>
                            <form action="{{route('notice.delete', ['id' => $notice->id])}}" method="POST" id="noticeDeleteForm{{$notice->id}}">
                                @csrf
                            </form>
                        </div>
                            @endif
                    </div>

                </div>

                <div class="card-body">
                    <p class="card-text font-20">{{$notice->notice}} </p>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-sm-7 font-20 ">posted by: <span class="text-primary">{{$notice->author}}</span> </div>
                        <p class="col-sm-5 font-18  ">posted at: <span class="text-secondary">{{$notice->created_at}}</span> </p>
                    </div>

                </div>
            </div>
        @endif
    @endforeach



@endsection