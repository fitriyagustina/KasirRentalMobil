<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{url('AdminLTE-3.1.0/dist/img/kamu.png')}}" alt="" class="w-50">
      <span class="brand-text font-weight-light">Rental Mobil</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 mb-3 d-flex">
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
          <li class="nav-item menu-open">
            <a href="{{url('/dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
           
          </li>
          
          <li class="nav-item">
            <a href="{{url('/pegawai')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data pegawai
               
              </p>
            </a>
          </li>
            </a>  
          </li>
          
          <li class="nav-item">
            <a href="{{url('/pelanggan')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Data pelanggan
              </p>
            </a>
          </li>
          </li> 
          </li>

          
            
          <li class="nav-item">
            <a href = "{{url('/kendaraan')}}" class="nav-link">
            <i class= "nav-icon fas fa-car"></i>
              <p>
                Data kendaraan
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href= "{{url('/rental')}}" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Rental
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{url('/logout')}}" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>