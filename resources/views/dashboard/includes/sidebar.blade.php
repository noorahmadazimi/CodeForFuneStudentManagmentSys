    <!-- Sidebar -->
    <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-graduation-cap"></i>
          </div>
          <div class="sidebar-brand-text">Code4Fun</div>
        </a>
  
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
  
        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
  
        <!-- Department Setup -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('department.index')}}">
          <i class="fa-solid fa-building-user"></i>
            <span>Department Setup</span></a>
        </li>
        
        <!-- Course Setup -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('course.create')}}">
          <i class="fa-solid fa-clipboard"></i>
            <span>Course Setup</span></a>
        </li>
        

        <!-- Teacher Setup -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('teacher.create')}}">
          <i class="fa-duotone fa-chalkboard-user"></i>
            <span>Teacher</span></a>
        </li>

        <!-- Course Assign To Teacher -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('course_assign_to_teacher.create')}}">
          <i class="fa-brands fa-atlassian"></i>
            <span>Course Assign To Teacher</span></a>
        </li>

        <!-- View Course Statics -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('view_course_statics.index')}}">
          <i class="fa-solid fa-street-view"></i>
            <span>View Course Statics</span></a>
        </li>

        <!-- Register Student -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('student.create')}}">
          <i class="fa-solid fa-registered"></i>
            <span>Register Student</span></a>
        </li>

        <!-- Allocate Classroom -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('allocate_classroom.create')}}">
          <i class="fa-solid fa-screen-users"></i>
            <span>Allocate Classroom</span></a>
        </li>

        <!-- View Class Schedule and Room Allocation -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('view_class_schedule_and_room_allocation.index')}}">
          <i class="fa-solid fa-calendar-days"></i>
            <span>View Class Schedule and Room Allocation</span></a>
        </li>

         <!-- Enroll In Course -->
         <li class="nav-item">
          <a class="nav-link" href="{{route('enroll_in_course.create')}}">
          <i class="fa-solid fa-pen-nib"></i>
            <span>Enroll In Course</span></a>
        </li>

        <!-- Student Result Save -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('result.create')}}">
          <i class="fa-solid fa-square-poll-horizontal"></i>
            <span>Student Result Save</span></a>
        </li>

        <!-- View Result -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('view_result.index')}}">
          <i class="fa-solid fa-people-group"></i>
            <span>View Student Result</span></a>
        </li>

        <!-- Unassign All Courses -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('unassgin_courses.create')}}">
          <i class="fa-solid fa-skull-crossbones"></i>
            <span>Unassign All Courses</span></a>
        </li>
        
        <!-- Unallocate All Classrooms -->
        <li class="nav-item">
          <a class="nav-link" href="{{route('unallocate_all_classrooms.create')}}">
          <i class="fa-solid fa-circle-xmark"></i>
            <span>Unallocate All Classrooms</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/stProject">
          <i class="fa-solid fa-registered"></i>
            <span>Student Projects</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/register">
          <i class="fa-solid fa-registered"></i>
            <span>Add Admin</span></a>
        </li>

        
  
        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->