<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="#" class="brand-link">
      <img src="{{asset('assets/img/SamiehaLogo.jpeg')}}" alt="SamiehaLogo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">سميها</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/img/SamiehaLogo.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                الرئيسية
              </p>
            </a>
          </li>
      
          <li class="nav-item">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                القوائم
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/slpTable" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>قائمة الاختصاصيين</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/patientTable" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>قائمة المرضى</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                التماذج
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('Material.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>رفع مواد الجلسة</p>
                </a>
              </li>
            </ul>
          </li>
      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>