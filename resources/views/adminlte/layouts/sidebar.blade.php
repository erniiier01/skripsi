<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link d-flex align-items-center justify-content-center">
        <span class="brand-text font-weight-light"><img src="{{ asset('assets/dashboard/img/visionet.png') }}" alt="Logo" style="width: 100px;">
            {{-- {{ config('app.name', 'Laravel') }} --}}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p> Dashboard </p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="{{ route('blank-page') }}" class="nav-link">
                        <i class="nav-icon fas fa-file"></i>
                        <p> Blank Page </p>
                    </a>
                </li> --}}
                @if(Auth::user()->role_id == 1)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            PROJECT MANAGEMENT
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('customer.index') }}" class="nav-link">
                                <i class="fas fa-archive nav-icon"></i>
                                <p>Customer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('project.index') }}" class="nav-link">
                                <i class="fas fa-archive nav-icon"></i>
                                <p>Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('location.index') }}" class="nav-link">
                                <i class="fas fa-archive nav-icon"></i>
                                <p>Location</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            REPORT
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('projectmonitoring.index') }}" class="nav-link">
                                <i class="far fa-chart-bar nav-icon"></i>
                                <p>Project Monitoring </p>
                            </a>
                        </li>
                        @if(Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a href="{{ route('jobreport.index') }}" class="nav-link">
                                <i class="far fa-chart-bar nav-icon"></i>
                                <p>Job Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('reportasset.index') }}" class="nav-link">
                                <i class="far fa-chart-bar nav-icon"></i>
                                <p>Report Asset Customer</p>
                            </a>
                        </li>
                        @endif
                    </ul>
                </li>
                @if(Auth::user()->role_id == 1)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}" class="nav-link">
                                <i class="far fa-user nav-icon"></i>
                                <p>User </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="nav-icon fa fa-group"></i>
                            <p> User </p>
                        </a>
                    </li>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>