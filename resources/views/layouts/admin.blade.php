<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Italent Laravel Application</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/app.css">
    @yield('styles')
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>

    </ul>
    
  </nav>  -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/uploads/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Italent</span>
    </a>



    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/uploads/images/{{ Auth::user()->profile_image ? Auth::user()->profile_image : 'default.png' }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
              {{Auth::user()->name}}
              <p>{{Auth::user()->type}}</p>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt blue"></i>
                <p>
                Dashboard

                </p>
            </router-link>
            </li>

            @can('isAdmin')
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog green"></i>
              <p>
                Management
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/users" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Users</p>
                </router-link>
              </li>

            </ul>
          </li>

          <li class="nav-item">
                <router-link to="/developer" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Developer
                    </p>
                </router-link>
         </li>
         @endcan
         
         <li class="nav-item">
                <router-link to="/admin/users" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <a href="{{route('users.index')}}"><i class="fa fa-btn fa-user"></i>users</a>
                </router-link>
         </li>

         <li class="nav-item">
                <router-link to="/admin/users/create" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <a href="{{route('users.create')}}"><i class="fa fa-btn fa-user"></i>create user</a>
                </router-link>
         </li>

         <li class="nav-item">
                <router-link to="/admin/posts" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <a href="{{route('posts.index')}}"><i class="fa fa-btn fa-user"></i>Posts</a>
                </router-link>
         </li>

         <li class="nav-item">
                <router-link to="/admin/posts/create" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <a href="{{route('posts.create')}}"><i class="fa fa-btn fa-user"></i>Create Post</a>
                </router-link>
         </li>

         <li class="nav-item">
                <router-link to="/admin/categories" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <a href="{{route('categories.index')}}"><i class="fa fa-btn fa-user"></i>Categies</a>
                </router-link>
         </li> 

          <li class="nav-item">
                <router-link to="/profile" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <a href="{{ url('/profile/1') }}"><i class="fa fa-btn fa-user"></i>Profile</a>
                </router-link>
         </li>

         <li class="nav-item">
                <router-link to="/home" class="nav-link">
                    <i class="nav-icon fas fa-user orange"></i>
                    <a href="{{ url('/home') }}"><i class="fa fa-btn fa-user"></i>Home</a>
                </router-link>
         </li>

          <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    <i class="nav-icon fa fa-power-off red"></i>
                    <p>
                        {{ __('Logout') }}
                    </p>
                 </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    
    <div class="content">
    @yield('content')
      <div class="container-fluid">
        <router-view></router-view>

        <vue-progress-bar></vue-progress-bar>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2018 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  
  </footer>
</div>
<!-- ./wrapper -->

@auth
<script>
    window.user = @json(auth()->user())
</script>
@endauth

<script src="/js/app.js"></script>

@yield('scripts')
</body>
</html>
