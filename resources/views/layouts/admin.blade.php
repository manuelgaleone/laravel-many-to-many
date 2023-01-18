<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ManuelFolio - BackOffice</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    <div id="app">
        <main>
            <div id="wrapper">
                <!-- Sidebar -->
                <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                        <div class="sidebar-brand-icon rotate-n-15">
                            <i class="fas fa-laugh-wink"></i>
                        </div>
                        <div class="sidebar-brand-text mx-3">Boolfolio</div>
                    </a>
                    <!-- Divider -->
                    <hr class="sidebar-divider my-0">

                    <!-- Nav Item - Dashboard -->
                    <li class="nav-item active">
                        <a class="nav-link {{ Route::currentRouteName() === 'admin.dashboard' ? 'text-white' : ''}}" href=" {{route('admin.dashboard')}}">
                            <span>Dashboard</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link {{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : ''}}" href=" {{route('admin.projects.index')}}">
                            <span>Projects</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link {{ Route::currentRouteName() === 'admin.dashboard' ? 'active' : ''}}" href=" {{route('admin.projects.create')}}">
                            <span>Create new project</span></a>
                    </li>
                </ul>
                <!-- End of Sidebar -->

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Main Content -->
                    <div id="content">
                        <!-- Topbar -->
                        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                            <div class="container">
                                <!-- Left Side Of Navbar -->
                                <div class="col-6 d-flex justify-content-start">
                                    <ul class="navbar-nav me-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Right Side Of Navbar -->
                                <div class="col-6 d-flex justify-content-end">
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                        @endif
                                        @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <!-- End of Topbar -->

                        <!-- Begin Page Content -->
                        <div class="container-fluid">
                            @yield('dashboard')
                            @yield('index')
                            @yield('create')
                            @yield('edit')
                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->

                    <!-- Footer -->
                    <footer class="sticky-footer bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Manuel</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->
            </div>
        </main>
    </div>
</body>

</html>