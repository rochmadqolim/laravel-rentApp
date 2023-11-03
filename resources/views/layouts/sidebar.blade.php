 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="#" class="brand-link">
         <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
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
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Tautan Dashboard -->
                 <li class="nav-item">
                     <a href="dashboard" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>


                 @if (auth()->user()->role_id == 1)
                     <li class="nav-item">
                         <a href="form" class="nav-link {{ request()->is('form') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-edit"></i>
                             <p>
                                 Form
                             </p>
                         </a>
                     </li>

                     <li class="nav-item {{ request()->is('driver', 'unit') }}">
                         <a href="#" class="nav-link {{ request()->is('driver', 'unit') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-thumbtack"></i>
                             <p>
                                 Post
                                 <i class="right fas fa-angle-left"></i>
                             </p>
                         </a>
                         <ul class="nav nav-treeview">
                             <li class="nav-item">
                                 <a href="driver" class="nav-link {{ request()->is('driver') ? 'active' : '' }}">
                                     <i class="fas nav-icon fa-id-card"></i>
                                     <p>Driver</p>
                                 </a>
                             </li>
                             <li class="nav-item">
                                 <a href="unit" class="nav-link {{ request()->is('unit') ? 'active' : '' }}">
                                     <i class="fas nav-icon fa-truck-monster"></i>
                                     <p>Unit</p>
                                 </a>
                             </li>
                         </ul>
                     </li>
                 @endif
                 <li class="nav-item">
                     <a href="log" class="nav-link {{ request()->is('log') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-book"></i>
                         <p>
                             Log
                         </p>
                     </a>
                 </li>

                 @if (auth()->user()->role_id == 1)
                     <li class="nav-item">
                         <a href="user" class="nav-link {{ request()->is('user') ? 'active' : '' }}">
                             <i class="fas fa-user nav-icon"></i>
                             <p>
                                 User Setting
                             </p>
                         </a>
                     </li>
                 @endif

                 <!-- Tautan Approval hanya ditampilkan jika bukan admin -->
                 @if (auth()->user()->role_id != 1)
                     <li class="nav-item">
                         <a href="approval" class="nav-link {{ request()->is('approval') ? 'active' : '' }}">
                             <i class="nav-icon fas fa-book"></i>
                             <p>
                                 Approval
                             </p>
                         </a>
                     </li>
                 @endif

                 <li class="nav-item">
                     <a href="returnForm" class="nav-link {{ request()->is('returnForm') ? 'active' : '' }}">
                         <i class="nav-icon fas fa-edit"></i>
                         <p>
                             Form Return
                         </p>
                     </a>
                 </li>
             </ul>

         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
