<nav class="main-header navbar navbar-expand navbar-white navbar-light">


    <!-- Left navbar links   -->
    <ul class="navbar-nav  " style="width:87%">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item float-end">
     
      </li>
       
    
    </ul>
    <a  class="nav-link float-end text-dark " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      <small>{{ __(' تسجيل خروج ') }}</small>  <i class="bi bi-box-arrow-left "></i>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


   
  </nav>