<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="javascript:void(0)" class="brand-link">
      <!-- <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">VRP-Vendor</span>
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo session()->get('VendorFullName');?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">            
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="{{URL::route('VDashboardView')}}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>             
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{URL::route('VProfileView')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Profile</p>
            </a>
          </li> 
          <li class="nav-item">
            <a href="{{URL::route('VPasswordView')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Password</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{URL::route('VLogout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Logout</p>
            </a>
          </li>  
        </ul>
      </nav>
    </div>
  </aside>