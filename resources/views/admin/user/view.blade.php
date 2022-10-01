@extends('admin.master')

@section('title')
    All Users
    @endsection

@section('body')
    <div class="row">
        <div class="col-md-12">

            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Admins info goes here</div>
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
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>ID</th>
                                <th>Admin</th>
                                <th>Email</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($admins as $admin)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$admin->id}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                </div>
            </div>
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Student  info goes here</div>
                </div>
                <div class="ibox-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>Student</th>
                                <th>Roll</th>
                                <th>Action</th>
                                {{--<th>Password</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->roll}}</td>
                                    <td>

                                        <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('userDeleteForm{{$student->id}}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form action="{{route('user.delete', ['id' => $student->id])}}" method="POST" id="userDeleteForm{{$student->id}}">
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                </div>
            </div>
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Teachers  info goes here</div>
                </div>
                <div class="ibox-body">

                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Sl no</th>
                                <th>Teacher</th>
                                <th>T_id</th>
                                <th>Action</th>
                                {{--<th>Password</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$teacher->name}}</td>
                                    <td>{{$teacher->t_id}}</td>
                                    <td>

                                        <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('userDeleteForm{{$teacher->id}}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form action="{{route('user.delete', ['id' => $teacher->id])}}" method="POST" id="userDeleteForm{{$teacher->id}}">
                                            @csrf
                                        </form>
                                    </td>
                                    {{--<td>{{$teacher->password}}</td>--}}
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                </div>

            </div>
            <div class="ibox mt-3">
                <div class="ibox-head">
                    <div class="ibox-title">All Guest Teachers  info goes here</div>
                </div>
                <div class="ibox-body">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sl no</th>
                            <th>Teacher</th>
                            <th>T_id</th>
                            <th>Action</th>
                            {{--<th>Password</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($guestTeachers as $guestTeacher)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$guestTeacher->name}}</td>
                                <td>{{$guestTeacher->g_id}}</td>
                                <td>

                                    <a href="" class="btn btn-danger btn-xs" onclick="event.preventDefault(); document.getElementById('userDeleteForm{{$guestTeacher->id}}').submit();">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    <form action="{{route('user.delete', ['id' => $guestTeacher->id])}}" method="POST" id="userDeleteForm{{$guestTeacher->id}}">
                                        @csrf
                                    </form>
                                </td>
                                {{--<td>{{$teacher->password}}</td>--}}
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

            </div>

        </div>
    </div>

@endsection









