<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('asset/backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('asset/backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ url('admin/home') }}" class="d-block">Shahriar Islam</a>
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
              Dashboard
              <i class=""></i>
            </p>
          </a>

          <!-- Add Content Start-->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Add
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('region.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Region</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('place.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Place</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('guide.create') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Guide</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- Add Content End -->


        <!--View Content-->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              View
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('region.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Region</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('place.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Place</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('guide.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Guide</p>
              </a>
            </li>
          </ul>
        </li>
        <!-- VIEW END -->












    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>