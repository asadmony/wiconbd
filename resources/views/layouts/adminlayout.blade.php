<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin Panel | {{ config('app.name') }}</title>
        {{-- style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="{{ asset('admin/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
        <link href="{{ asset('admin/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
        {{-- icons --}}
        <link href="{{ asset('admin/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
        <script src="{{ asset('admin/js/font-awesome.min.js') }}" ></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="" target="_blank">{{ config('app.name') }}</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> {{ auth('admin')->user()->name }} </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        @admin('super')
                        <a class="dropdown-item" href="{{ route('admin.home') }}">As Admin Manager</a>
                        @endadmin
                        <a class="dropdown-item" href="{{ route('admin.password.change') }}">Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/admin/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Products</div>
                            <a class="nav-link " href="{{ route('admin.products') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Product List
                            </a>
                            <a class="nav-link " href="{{ route('admin.newproduct') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add Product
                            </a>
                            <div class="sb-sidenav-menu-heading">Categories</div>
                            <a class="nav-link " href="{{ route('admin.categories') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category List
                            </a>
                            <a class="nav-link " href="{{ route('admin.newcategory') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add Category
                            </a>
                            <div class="sb-sidenav-menu-heading">Brands</div>
                            <a class="nav-link " href="{{ route('admin.brands') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Brand List
                            </a>
                            <a class="nav-link " href="{{ route('admin.newbrand') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add Brand
                            </a>
                            <div class="sb-sidenav-menu-heading">Sliders</div>
                            <a class="nav-link " href="{{ route('admin.sliders') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Slider List
                            </a>
                            <a class="nav-link " href="{{ route('admin.newslider') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add Slider
                            </a>
                            <div class="sb-sidenav-menu-heading">Auto Code Generator</div>
                            <a class="nav-link " href="{{ route('admin.autocodes') }}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Auto Codes
                            </a>
                            <div class="sb-sidenav-menu-heading">others</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Site Manager
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main class="">
                    <div id="app" class="container-fluid">
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; {{ config('app.name') }} 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('admin/js/jquery-3.5.1.min.js') }}" ></script>
        <script src="{{ asset('admin/js/bootstrap.min.js') }}" ></script>
        <script src="{{ asset('admin/js/scripts.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"> </script>
        <script src="{{ asset('admin/js/Chart.min.js') }}" ></script>
        <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('admin/js/demo/chart-bar-demo.js') }}"></script>
        <script src="{{ asset('admin/js/jquery.dataTables.min.js') }}" ></script>
        <script src="{{ asset('admin/js/dataTables.bootstrap4.min.js') }}" ></script>
        <script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
    </body>
</html>
