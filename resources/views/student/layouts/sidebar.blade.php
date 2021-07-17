@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        @if (Auth::user()->status == 1)

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
                        <a href="{{ route('student.profiles.view') }}" class="nav-link {{ ($route=='student.profiles.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Your Profile</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('student.profiles.password.view') }}" class="nav-link {{ ($route=='student.profiles.password.view'?'active':'') }}">
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
                        <a href="{{ route('fee.category.amount.view') }}" class="nav-link {{ ($route=='fee.category.amount.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Fee Category Amount</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('exam.type.view') }}" class="nav-link {{ ($route=='exam.type.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Exam Type</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('assign.subject.view') }}" class="nav-link {{ ($route=='assign.subject.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Assign Subject</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('mark.grade.view') }}" class="nav-link {{ ($route=='mark.grade.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Grade Point</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('student.reports.marksheet.view') }}" class="nav-link {{ ($route=='student.reports.marksheet.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Mark Sheet</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item has-treeview {{ ($prefix=='/notice')?'menu-open':'' }}">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                        Notice Board
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('student.notice.view') }}" class="nav-link {{ ($route=='student.notice.view'?'active':'') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Notice</p>
                        </a>
                    </li>
                </ul>
            </li>


            @else


        @endif


    </ul>
</nav>
<!-- /.sidebar-menu -->
