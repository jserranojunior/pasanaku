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
      <span class="logo-mini"><b>C</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">
      <b>CONTA <br>
      Pasanaku - Familia Feliz (PFF)</span>
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
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 mensages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">Ver todas as mensagens</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 notificações</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                 
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">Ver todas</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Você tem 0 tarefas</li>
              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">Ver todas as tarefas</a>
              </li>
            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="{{URL('img')}}/{{auth()->user()->image}}" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="{{URL('img')}}/{{auth()->user()->image}}"  class="img-circle" alt="User Image">

                <p class="text-center">
                {{auth()->user()->name}}
                  <small>Administrador</small>
                </p>
                
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Perfil</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sair</a>
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
          <img src="{{URL('img')}}/{{auth()->user()->image}}"  class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{auth()->user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header text-center">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="{{URL('/')}}"><i class="fa fa-home"></i> <span>INÍCIO</span></a></li>
        <li><a href="{{URL('saldo')}}"><i class="fa fa-university"></i> <span>SALDO</span></a></li>
        <li><a href="{{URL('extrato')}}"><i class="fa fa-line-chart"></i> <span>EXTRATO</span></a></li>
        <li><a href="{{URL('deposito')}}"><i class="fa fa-plus-square-o"></i> <span>DEPOSITO</span></a></li>
        <li><a href="{{URL('resgate')}}"><i class="fa fa-life-ring"></i> <span>RESGATE</span></a></li>
        <li><a href="{{URL('#')}}"><i class="fa fa-users"></i> <span>GRUPO</span></a></li>
       
        
        <li><a href="{{Route('logout')}}"><i class="fa fa-power-off"></i> <span>SAIR</span></a></li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  @yield('main')