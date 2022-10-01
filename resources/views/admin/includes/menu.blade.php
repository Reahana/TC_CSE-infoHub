<!-- START SIDEBAR-->
<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                <img src="{{asset('/')}}assets/img/admin-avatar.png" width="45px" />
            </div>
            <div class="admin-info">
                <div class="font-strong">TC_CSE-infoHub</div><small>Administrator</small></div>
        </div>
        <ul class="side-menu metismenu">
            <li>
                <a class="active" href="{{route('dashboard')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <li class="heading">FEATURES</li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon far fa-calendar-check"></i>
                    <span class="nav-label">Semester</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('semester.add')}}">Add Semester</a>
                    </li>
                    <li>
                        <a href="{{route('semester.manage')}}">Manage Semester</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-book"></i>
                    <span class="nav-label">Courses</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('course.add')}}">Add Courses</a>
                    </li>
                    <li>
                        <a href="{{route('course.manage')}}">Manage Courses</a>
                    </li>
                </ul>
            </li>
	    <li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-users"></i>
                    <span class="nav-label">Batch</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('batch.add')}}">Add Batch</a>
                    </li>
                    <li>
                        <a href="{{route('batch.manage')}}">Manage Batch</a>
                    </li>
                </ul>
            </li>
	    
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-user-graduate"></i>
                    <span class="nav-label">Students</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('student.add')}}">Add Students</a>
                    </li>
                    <li>
                        <a href="{{route('student.manage')}}">Manage Students</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-chalkboard-teacher"></i>
                    <span class="nav-label">Teacher</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('teacher.add')}}"> Add Teacher</a>
                    </li>
                    <li>
                        <a href="{{route('guideTeacher.add')}}"> Add Guide Teacher</a>
                    </li>
                    <li>
                        <a href="{{route('teacher.manage')}}">Manage Teacher</a>
  			
                        
                    </li>                  
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;"><i class="sidebar-item-icon fa fa-pen"></i>
                    <span class="nav-label">Course Teacher</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('courseTeacher.add')}}"> Add Course Teacher</a>
                    </li>

                    <li>
                        <a href="{{route('courseTeacher.manage')}}">Manage Course Teacher</a>
                    </li>


                </ul>
            </li>

	        
 	<li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-building"></i>
                    <span class="nav-label">Room</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('room.add')}}">Add Room</a>
                    </li>
                    <li>
                        <a href="{{route('room.manage')}}">Manage Room</a>
                    </li>
                </ul>
            </li>
	<li>
                <a href="javascript:;"><i class="sidebar-item-icon fas fa-table"></i>
                    <span class="nav-label">Routine</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('routine.add')}}">Add Student Routine</a>
                    </li>
                    <li>
                        <a href="{{route('add.routine')}}">Add Teacher Routine</a>
                    </li>
                    <li>
                        <a href="{{route('routine.manage')}}">Manage Student Routine</a>
                    </li>
                    <li>
                        <a href="{{route('manage.routine')}}">Manage Teacher Routine</a>
                    </li>
                </ul>
            </li>
<li>
        <a href="javascript:;"><i class="sidebar-item-icon fas fa-book-open"></i>
            <span class="nav-label">Library</span><i class="fa fa-angle-left arrow"></i></a>
        <ul class="nav-2-level collapse">
            <li>
                <a href="{{route('pdf.add')}}">Add PDFs</a>
            </li>
            {{--<li>--}}
                {{--<a href="">Add Questions</a>--}}
            {{--</li>--}}
	    <li>
                <a href="{{route('pdf.manage')}}">Manage Library</a>
            </li>
        </ul>
    </li>

            <li>
                <a href=""><i class=" sidebar-item-icon fas fa-chalkboard"></i>
                    <span class="nav-label">Notice Board</span><i class="fa fa-angle-left arrow"></i></a>
                <ul class="nav-2-level collapse">
                    <li>
                        <a href="{{route('notice.add')}}">Add Notice</a>
                    </li>
                    <li>
                        <a href="{{route('notice.manage')}}">Manage Notice</a>
                    </li>

                </ul>
            </li>
            {{--<li class="heading">Admin Section</li>--}}
            <li>
                <a href="{{route('all.user')}}"><i class="sidebar-item-icon fa fa-user"></i>
                    <span class="nav-label">Users Module</span></a>

            </li>

        </ul>
    </div>
</nav>
<!-- END SIDEBAR-->