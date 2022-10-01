<!--  HEADER-->
<header class="header">
    <div class="page-brand">
        {{--@yield('brand')--}}
        @if(auth()->user()->role_id==1)
             <a class="link" href="{{route('student-dashboard')}}">
            <span class="brand">Student
                <span class="brand-tip">Dashboard</span>
            </span>
            <span class="brand-mini">SD</span>
        </a>

        @elseif(auth()->user()->role_id==2)
            <a class="link" href="{{route('teacher-dashboard')}}">
            <span class="brand">Teacher
                <span class="brand-tip">Dashboard</span>
            </span>
                <span class="brand-mini">TD</span>
            </a>
        @elseif(auth()->user()->role_id==3)
            <a class="link" href="{{route('guest_teacher-dashboard')}}">
            <span class="brand">Teacher
                <span class="brand-tip">Dashboard</span>
            </span>
                <span class="brand-mini">TD</span>
            </a>
        @endif
    </div>
<div class="flexbox flex-1">
<!-- START TOP-LEFT TOOLBAR-->
<ul class="nav navbar-toolbar">
    <li>
        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
    </li>

</ul>
<!-- END TOP-LEFT TOOLBAR-->
<!-- START TOP-RIGHT TOOLBAR-->
<ul class="nav navbar-toolbar">
    <li class="dropdown dropdown-user">
        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
            @php
                if (auth()->user()->role_id == 2)
            {
             $teacher =\App\Models\Teacher::where('t_id',auth()->user()->t_id)->first();


            }
            elseif (auth()->user()->role_id == 3)
            {
             $guestTeacher =\App\Models\Teacher::where('t_id',auth()->user()->g_id)->first();


            }
            elseif (auth()->user()->role_id == 1)
            {
             $student =\App\Models\Student::where('roll',auth()->user()->roll)->first();
            }

            @endphp

            @if(auth()->user()->role_id == 2)

                <img  src="{{asset($teacher->image)}}"   />
            @endif
            @if(auth()->user()->role_id == 3)

                <img  src="{{asset( $guestTeacher->image)}}"   />
            @endif
            @if(auth()->user()->role_id == 1)

                <img  src="{{asset($student->image)}}"   />
            @endif
            {{--<img src="{{asset('/')}}assets/img/admin-avatar.png" />--}}
            <span></span>{{ Auth::user()->name}}<i class="fa fa-angle-down m-l-5"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="{{route('change-password')}}"><i class="fas fa-key"></i>  Change Password</a>
            {{--<a class="dropdown-item" href="{{route('/')}}"><i class="fas fa-power-off"></i>  Logout</a>--}}
            <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                <i class="fa fa-power-off"></i> Logout
            </a>
            <form action="{{route('logout')}}" method="POST" id="logoutForm">
                @csrf
            </form>
        </ul>
    </li>
</ul>
<!-- END TOP-RIGHT TOOLBAR-->
</div>
</header>
