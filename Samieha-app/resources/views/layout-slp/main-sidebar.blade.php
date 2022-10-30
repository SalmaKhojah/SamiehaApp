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
            <a href="/slpPaitentTable" class="nav-link ">
            <i class="nav-icon fas fa-table"></i>
              <p>
                قائمة المرضى
              </p>
            </a>
          </li>

          <li class="nav-item  ">
            <a href="{{route('session.create')}}" class="nav-link ">
            <i class="nav-icon fas fa-edit"></i>
              <p>
              إضافة جلسة علاجية 
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="{{route('slpLinkP.create')}}" class="nav-link ">
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