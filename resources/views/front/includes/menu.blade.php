<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">

        <div class="admin-block d-flex">
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

                <img  class="img-circle" src="{{asset($teacher->image)}}" width="50" height="50"  />
            @endif
            @if(auth()->user()->role_id == 3)

                <img class="img-circle" src="{{asset( $guestTeacher->image)}}"  width="50" height="50"  />
            @endif
            @if(auth()->user()->role_id == 1)

                <img  class="img-circle" src="{{asset($student->image)}}" width="50" height="50"  />
            @endif

            {{--<img src="{{asset('/')}}assets/img/admin-avatar.png" />--}}

            <div class="admin-info">
                <div class="font-strong">{{ Auth::user()->name}}</div>
                @if(auth()->user()->role_id==1)
                <small>Student</small>
                @elseif(auth()->user()->role_id==2 )
                    <small>Teacher</small>
                @elseif(auth()->user()->role_id==3)
                    <small>Guest Teacher</small>
                    @endif
            </div>
        </div>
        <ul class="side-menu metismenu">
            @if(auth()->user()->role_id==1)
            <li>
                <a class="active" href="  {{route('student-dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            @elseif(auth()->user()->role_id==2)
            <li>
                <a class="active" href="  {{route('teacher-dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            @elseif(auth()->user()->role_id==3)
                <li>
                    <a class="active" href="  {{route('guest_teacher-dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                        <span class="nav-label">Dashboard</span>
                    </a>
                </li>
            @endif
            <li class="heading "><h4>MENU</h4></li>
            @if(auth()->user()->role_id==1)
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-user"></i>
                    <span class="nav-label">Profile</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('stu-profile.view')}}">View Profile</a>
                    </li>
                    <li>
                        <a href="{{route('stu-profile.edit')}}">Edit Profile</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{route('attendance.student')}}"><i class="sidebar-item-icon fas fa-file-alt"></i>
                    <span class="nav-label">Attendance</span></a>

            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-chart-line"></i>
                    <span class="nav-label">Results</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('incourse.student')}}">Incourse Mark</a>
                    </li>
                    <li>
                        <a href="http://103.113.200.7/" target="_blank">Semester Result</a>
                    </li>
                </ul>

            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-building"></i>
                    <span class="nav-label">Classroom</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('classmate')}}">Classmates</a>
                    </li>
                    <li>
                        <a href="{{route('routine')}}">Routine</a>
                    </li>
                </ul>
            </li>
                    <li>
                        <a href="{{route('faculty')}}"><i class="sidebar-item-icon fas fa-chalkboard-teacher"></i>
                            <span class="nav-label">Teacher's Desk</span></a>
                    </li>
            @endif
                @if(auth()->user()->role_id==2 ||auth()->user()->role_id==3 )

                <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-user"></i>
                            <span class="nav-label">Profile</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('tea-profile.view')}}">View Profile</a>
                            </li>
                            <li>
                                <a href="{{route('tea-profile.edit')}}">Edit Profile</a>
                            </li>
                        </ul>
                    </li>
                    @if(auth()->user()->role_id!=3  )
                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fas fa-book"></i>
                        <span class="nav-label">Courses</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href="{{route('courses.view1S')}}">1st Semester</a>
                        </li>
                        <li>
                            <a href="">2nd Semester</a>
                        </li>
                        <li>
                            <a href="">3rd Semester</a>
                        </li>
                        <li>
                            <a href="">4th Semester</a>
                        </li>
                        <li>
                            <a href="{{route('courses.view5S')}}">5th Semester</a>
                        </li>
                        <li>
                            <a href="">6th Semester</a>
                        </li>
                        <li>
                            <a href="">7th Semester</a>
                        </li>
                        <li>
                            <a href="">8th Semester</a>
                        </li>
                    </ul>
                </li>
                    @endif


                <li>
                    <a href="javascript:;"><i class="sidebar-item-icon fas fa-user-graduate"></i>
                        <span class="nav-label">Student Corner</span><i class="fa fa-angle-left arrow"></i></a>
                    <ul class="nav-2-level collapse">
                        <li>
                            <a href=""><span class="nav-label">9 Batch </span><i class="fa fa-angle-double-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li><a href="{{route('nineBatchA.student')}}">Section A</a></li>
                                <li><a href="{{route('nineBatchB.student')}}">Section B</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href=""><span class="nav-label">10 Batch</span><i class="fa fa-angle-double-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li><a href="{{route('tenBatchA.student')}}">Section A</a></li>
                                <li><a href="{{route('tenBatchB.student')}}">Section B</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="form_masks.html"><span class="nav-label">11 Batch</span><i class="fa fa-angle-double-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li><a href="{{route('elevenBatchA.student')}}">Section A</a></li>
                                <li><a href="{{route('elevenBatchB.student')}}">Section B</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="form_validation.html"><span class="nav-label">12 Batch</span><i class="fa fa-angle-double-left arrow"></i></a>
                            <ul class="nav-2-level collapse">
                                <li><a href="{{route('twelveBatchA.student')}}">Section A</a></li>
                                <li><a href="{{route('twelveBatchB.student')}}">Section B</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
                   
                <li>
                    <a href="{{route('view.routine')}}"><i class="sidebar-item-icon fas fa-table"></i>
                        <span class="nav-label">Routine</span></a>

                </li>
                
                </li>

                @endif
                @if(auth()->user()->role_id==2)
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-file"></i>
                            <span class="nav-label">Notes</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('note.add')}}">Add</a>
                            </li>
                            <li>
                                <a href="{{route('manage.note')}}">Manage</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('attendance')}}"><i class="sidebar-item-icon fas fa-file-alt"></i>
                            <span class="nav-label">Attendance</span></a>

                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-edit"></i>
                            <span class="nav-label">Marks</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('incourse.marks')}}">In Course</a>
                            </li>
                            {{--<li>--}}
                            {{--<a href="">Mid Term</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="">Practical</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>

            @endif
                @if(auth()->user()->role_id==3)
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-file"></i>
                            <span class="nav-label">Notes</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('add.note')}}">Add</a>
                            </li>
                            <li>
                                <a href="{{route('manage.note')}}">Manage</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="{{route('attendances')}}"><i class="sidebar-item-icon fas fa-file-alt"></i>
                            <span class="nav-label">Attendance</span></a>

                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-edit"></i>
                            <span class="nav-label">Marks</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('incourses')}}">In Course</a>
                            </li>
                            {{--<li>--}}
                            {{--<a href="">Mid Term</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                            {{--<a href="">Practical</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                    @endif


            <li class="heading">PAGES</li>

                @if(auth()->user()->role_id==1)
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-book-open"></i>
                            <span class="nav-label">Library</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('books.show')}}">Book</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="">Question</a>--}}
                            {{--</li>--}}
                            <li>
                                <a href="{{route('view.note')}}">Notes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('notice.view')}}"><i class=" sidebar-item-icon fas fa-chalkboard"></i>
                            <span class="nav-label">Notice Board</span></a>

                    </li>


                @elseif(auth()->user()->role_id==2)
                    <li>
                        <a href="{{route('faculty')}}"><i class="sidebar-item-icon fas fa-chalkboard-teacher"></i>
                            <span class="nav-label">Faculty</span></a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-book-open"></i>
                            <span class="nav-label">Library</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('books.show')}}">Book</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="">Question</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class=" sidebar-item-icon fas fa-chalkboard"></i>
                            <span class="nav-label">Notice Board</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('notice.view')}}">View Notice</a>
                            </li>
                            <li>
                                <a href="{{route('add.notice')}}">Add Notice</a>
                            </li>

                        </ul>
                    </li>


                @elseif(auth()->user()->role_id==3)
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fas fa-book-open"></i>
                            <span class="nav-label">Library</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('books.show')}}">Book</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="">Question</a>--}}
                            {{--</li>--}}
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class=" sidebar-item-icon fas fa-chalkboard"></i>
                            <span class="nav-label">Notice Board</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="{{route('notice.view')}}">View Notice</a>
                            </li>
                            <li>
                                <a href="{{route('add.notice')}}">Add Notice</a>
                            </li>

                        </ul>
                    </li>
                @endif
                @if(auth()->user()->role_id!=3)
                <li>
                    <a href="{{route('blood.bank')}}"><i class="sidebar-item-icon fas fa-hand-holding-water"></i>
                        <span class="nav-label"> Blood Bank</span></a>

                </li>
                @endif
                <li class="heading">Important Links</li>

                <li>
                    <a href="https://www.nu.ac.bd/" target="_blank"><img src="{{asset('/')}}assets/images/nu_logo.png" height="50" width="30"/> National University</a>
                </li>
                <li>
                    <a href="https://www.tejgaoncollege.edu.bd/" target="_blank"><img src="{{asset('/')}}assets/images/tc_logo.png" height="50" width="30"/> Tejgaon College</a>
                </li>
                <li>
                    <a href="https://www.tcprogramming.club/"  target="_blank"><img src="{{asset('/')}}assets/images/club_logo.png" height="40" width="30"/> TC Programming Club</a>
                </li>



        </ul>
    </div>
</nav>