@use(App\Models\User)

 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ asset('assets/img/rental.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Rental mobil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/img/avatar2.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        @auth
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
          <span class="text-primary">{{ Auth::user()->role }}</span>
        </div>
        @endauth
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @auth
              @if (Auth::user()->role == User::ROLE_ADMIN)
              <li class="nav-item">
                <a href="{{ url('admin/jenis_kendaraan') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jenis kendaraan</p>
                </a>
              </li>
              @endif
              @endauth
              
              @auth
              @if (Auth::user()->role == User::ROLE_ADMIN)
              <li class="nav-item">
                <a href="{{ url('admin/armada') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>armada</p>
                </a>
              </li>
              @endif
              @endauth
              <li class="nav-item">
                <a href="{{ url('admin/peminjaman') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>peminjaman</p>
                </a>
                <li class="nav-item">
                <a href="{{ url('admin/pembayaran') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>pembayaran</p>
                </a>
              </li>
            </ul>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>