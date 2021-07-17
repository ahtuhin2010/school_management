@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if (Auth::user()->usertype == 'teacher')

            <li class="nav-item has-treeview {{ ($prefix=='/profiles')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Profile
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('teacher.profiles.view') }}" class="nav-link {{ ($route=='teacher.profiles.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Your Profile</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('teacher.profiles.password.view') }}" class="nav-link {{ ($route=='teacher.profiles.password.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Change Password</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($prefix=='/information')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Information
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('teacher.fee.category.amount.view') }}" class="nav-link {{ ($route=='teacher.fee.category.amount.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fee Category Amount</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('teacher.exam.type.view') }}" class="nav-link {{ ($route=='teacher.exam.type.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Exam Type</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.assign.subject.view') }}" class="nav-link {{ ($route=='teacher.assign.subject.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Assign Subject</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($prefix=='/marks')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Marks
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('teacher.mark.grade.view') }}" class="nav-link {{ ($route=='teacher.mark.grade.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Grade Point</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.marks.add') }}" class="nav-link {{ ($route=='teacher.marks.add'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Marks Entry</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.marks.edit') }}" class="nav-link {{ ($route=='teacher.marks.edit'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Marks Edit</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.students.roll.view') }}" class="nav-link {{ ($route=='teacher.students.roll.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Roll Generate</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.reports.marksheet.view') }}" class="nav-link {{ ($route=='teacher.reports.marksheet.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Student Mark Sheet</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('teacher.reports.result.view') }}" class="nav-link {{ ($route=='teacher.reports.result.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Student Results</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($prefix=='/teacher')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Attendance
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('teacher.reports.attendance.view') }}" class="nav-link {{ ($route=='teacher.reports.attendance.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Attendance Report</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($prefix=='/notice')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Notice
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('teacher.notice.view') }}" class="nav-link {{ ($route=='teacher.notice.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Notice Board</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item has-treeview {{ ($prefix=='/parents')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Manage Parents
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('teacher.parents.view') }}" class="nav-link {{ ($route=='teacher.parents.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Parent</p>
                        </a>
                    </li>
                </ul>
            </li>


            @else


        @endif


    </ul>
</nav>
<!-- /.sidebar-menu -->
