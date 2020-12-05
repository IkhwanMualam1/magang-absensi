 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
           <span class="font-weight-bolder text ml-3">AM</span>
           <span class="brand-text font-weight-light ml-2">
             <span class="bg-primary text-bold border border-primary rounded p-1">Absensi Magang</span>
           </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
          <span class="text-secondary"><span class="text-success h4">&#183;</span> online</span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{url('dashboard')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('user')}}" class="nav-link">
                        <i class="nav-icon far fa-circle nav-icon"></i>
                      <p>
                        User
                      </p>
                    </a>
                  </li>
              <li class="nav-item">
                <a href="{{url('magang')}}" class="nav-link">
                    <i class="nav-icon far fa-circle nav-icon"></i>
                  <p>
                    Data Magang
                  </p>
                </a>
              </li>
            </ul>
          <li class="nav-item">
            <a href="{{url('absensi')}}" class="nav-link">
                <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                Absensi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('quest')}}" class="nav-link">
                <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Permohonan Izin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('report')}}" class="nav-link">
                <i class="nav-icon fas fa-window-restore"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
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
