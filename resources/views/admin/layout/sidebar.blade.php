<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        {{-- <img src="{{ asset('images/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">Atlops</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/person.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                {{-- <a href="#" class="d-block">{{ auth()->guard('admin')->user()->name }}</a> --}}
            </div>
        </div>

        <!-- SidebarSearch Form -->
        {{-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                {{-- <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Active Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a href="{{ Route('slider.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">Home Slider</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('additionalService.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">Additional Services</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('cities.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">cities</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('countries.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">countries</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('about.create') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">about</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('bank.create') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">Bank Account</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('terms.create') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">Terms And Conditions</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ Route('blogsCreate.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">blogs</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('blogsCreate.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">blogs</span>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Route('categoryOrder.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">Category Order</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">Users</span>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.orders.index') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>

                        <span class="menu-title">Orders</span>

                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ Route('admin.orders') }}" class="nav-link">
                        <i class="mdi mdi-view-carousel menu-icon"></i>
                        <span class="menu-title">View Orders</span>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
<!-- /.control-sidebar -->
