<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pasanaku | Início </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">



   <link href="{{ url('css/all.css') }}" rel="stylesheet">
    <script src="{{ url('js/all.js') }}"></script> 


</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>K</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PASANAKU</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{$notification}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">
              Você tem {{$notification}} 
              @if($notification > 1) 
                notificações 
              @else 
                notificacão 
              @endif  
              </li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                 
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer text-center"><a href="#">Visualizar</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img  src="{{URL('img')}}/{{ auth()->guard('admin')->user()->image }}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ auth()->guard('admin')->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{URL('img')}}/{{ auth()->guard('admin')->user()->image }}"  class="img-circle" alt="User Image">

                <p class="text-center">
                  {{ auth()->guard('admin')->user()->name }}     
                </p>                
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="{{Route('admin.logout')}}" class="btn btn-default btn-flat">Sair</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL('img')}}/{{ auth()->guard('admin')->user()->image }}"  class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->guard('admin')->user()->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class=""><a href="{{URL('/admin')}}"><i class="fa fa-home"></i> <span>INÍCIO</span></a></li>
        <li><a href="{{URL('admin/clientes')}}"><i class="fa fa-users"></i> <span>CLIENTES</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>RELATÓRIOS</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Relatório Anual</a></li>
            <li><a href="#">Relatório Mensal</a></li>
            
          </ul>
        </li>
        
        <li><a href="{{Route('admin.logout')}}"><i class="fa fa-power-off"></i> <span>SAIR</span></a></li>
        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('main')