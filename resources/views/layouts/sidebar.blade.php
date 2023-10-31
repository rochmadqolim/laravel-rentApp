 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DriveRent</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('dist/img/person.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info pl-2">
              <a href="#" class="d-block">TRIAL</a>
            </div>
          </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Tautan Dashboard -->
          <li class="nav-item menu-open">
            <a href="dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if (auth()->user()->role == 'admin')
          <li class="nav-item">
            <a href="rentForm" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Form Rent
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="returnForm" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Form Return
              </p>
            </a>
          </li>
        @endif
          <li class="nav-item">
            <a href="rentLog" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Rent log
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="returnLog" class="nav-link active">
              <i class="nav-icon fas fa-book"></i>

              <p>
                Return log
              </p>
            </a>
          </li>
        
          <!-- Tautan Approval hanya ditampilkan jika bukan admin -->
          @if (auth()->user()->role != 'admin')
            <li class="nav-item">
              <a href="approval" class="nav-link active">
                <i class="nav-icon fas fa-book"></i>
                <p>
                  Approval
                </p>
              </a>
            </li>
          @endif
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>