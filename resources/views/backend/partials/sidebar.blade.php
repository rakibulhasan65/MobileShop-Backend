<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">

        <img  src="{{ asset('images/backend') }}/{{ $setting->site_logo }}" alt="Urban Tech"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $setting->site_name }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/backend') }}/{{ Auth::user()->avatar }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

{{--        <!-- SidebarSearch Form -->--}}
{{--         <div class="form-inline">--}}
{{--            <div class="input-group" data-widget="sidebar-search">--}}
{{--                <input class="form-control form-control-sidebar" type="search" placeholder="Search"--}}
{{--                    aria-label="Search">--}}
{{--                <div class="input-group-append">--}}
{{--                    <button class="btn btn-sidebar">--}}
{{--                        <i class="fas fa-search fa-fw"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item {{ (request()->is(['admin/settings*','admin/roles*','admin/roles*','admin/modules*','admin/backups*','admin/permissions*','admin/users*','admin/backups*'])) ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-cogs nav-icon"></i>
                        <p>
                            Settings
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.settings.index') }}" class="nav-link {{ (request()->is('admin/settings*')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-cog nav-icon"></i>
                                <p>
                                    General Settings

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.roles.index') }}" class="nav-link {{ (request()->is('admin/roles*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Roles

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.modules.index') }}" class="nav-link {{ (request()->is('admin/modules*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Modules

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.permissions.index') }}" class="nav-link {{ (request()->is('admin/permissions*')) ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Permission

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link {{ (request()->is('admin/users*')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    User

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.backups.index') }}" class="nav-link {{ (request()->is('admin/backups*')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users-cog"></i>
                                <p>
                                    Backup

                                </p>
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs nav-icon"></i>
                        <p>
                            Project
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.projects.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-th-list "></i>
                                <p>
                                    Project
                                </p>
                            </a>
                        </li>


                    </ul>
                </li>

          --}}




                <li class="nav-item">
                    <a href="{{ route('admin.aboutuses.index') }}" class="nav-link {{ (request()->is('admin/aboutuses*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-list "></i>
                        <p>
                            About Us

                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('admin.sliders.index') }}" class="nav-link {{ (request()->is('admin/sliders*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th-list "></i>
                        <p>
                            Sliders

                        </p>
                    </a>
                </li>




                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
