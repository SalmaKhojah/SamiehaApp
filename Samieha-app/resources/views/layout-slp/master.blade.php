<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  @include('layout-slp.head')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/img/SamiehaLogo.svg')}}" alt="SamiehaLogo" height="60" >
  </div>

  <!-- Navbar -->
  @include('layout-slp.main-headerbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->




  <aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="#" class="brand-link">
      <img src="{{asset('assets/img/SamiehaLogo.jpeg')}}" alt="SamiehaLogo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">سميها</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class=" mt-3 pb-3 mb-1 d-flex">
      <img src="{{asset('assets/img/SamiehaLogo.svg')}}" hieght="20px" alt="logo">

      
      </div>
      <div class="user-panel pb-3 d-flex">
      
      </div>
      <div class="user-panel mt-2 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block">اختصاصي: <b>{{ Auth::user()->name }}</b></a>
        </div>
      </div>

      <!-- Sidebar Menu  -->
      <nav class="mt-2  ">
        <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          <li class="nav-item ">
            <a href="/slpPaitentTable" class="nav-link   @yield('patientlink') ">
            <i class="nav-icon fas fa-table"></i>
              <p>
                قائمة المرضى
              </p>
            </a>
          </li>

          <li class="nav-item  ">
            <a href="{{route('session.index')}}" class="nav-link  @yield('sessionlink') ">
            <i class="nav-icon fas fa-edit"></i>
              <p>
              إضافة جلسة علاجية 
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{route('slpLinkP.create')}}" class="nav-link  @yield('linklink')">
            <i class="nav-icon bi bi-link-45deg"></i>
              <p>
                ربط المريض 
              </p>
            </a>
          </li>


      
        
     
        </ul>
       
      </nav>
      <!-- /.sidebar-menu -->

      
    </div>
    <!-- /.sidebar -->
  </aside>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="@yield('link1')">@yield('bar1')</a></li>
              <li class="breadcrumb-item active"><a href="@yield('link2')">@yield('bar2')</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
   @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <!-- @include('layout-slp.footer') -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- @include('layout-slp.footer-scripts') -->

</body>
</html>
