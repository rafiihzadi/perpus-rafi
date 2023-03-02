<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('gambar/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('gambar/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          @if (Str::length(Auth::guard('pengguna')->user()) > 0)
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
          @elseif (Str::length(Auth::guard('user')->user()) > 0)
          <a href="#" class="d-block">{{ Auth::guard('user')->user()->name }}</a>
          @endif
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if(Str::length(Auth::guard('user')->user()) > 0)
              @if(Auth::guard('user')->level = "admin")
              <li class="nav-item">
                <a href="{{route('halaman-satu')}}" class="nav-link">
                    halaman satu
                </a>
              </li>
            @endif
            @endif  
            <li class="nav-item">
              <a href="{{route('halaman-dua')}}" class="nav-link">
                    Halaman Dua
                </a>
              </li> 
              
              @if(Str::length(Auth::guard('pengguna')->user()) > 0)
              @if(Auth::guard('pengguna')->level = "mhs")
              <li class="nav-item">
                <a href="{{route('halaman-tiga')}}" class="nav-link">
                    Halaman Tiga
                </a>
              </li>
             @endif
            @endif 
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>