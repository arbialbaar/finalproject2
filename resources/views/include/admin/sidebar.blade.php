<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    {{--  <a href="index3.html" class="brand-link">
      <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>  --}}

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin" class="nav-link  @yield('menuHome')">
              <i class="nav-icon 	fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
            <li class="nav-item">
                <a href="/admin/product" class="nav-link @yield('menuProduct')">
                <i class="nav-icon far fa-clipboard"></i>
                <p>
                    Product
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/client" class="nav-link @yield('menuClient')">
                  <i class="nav-icon fas fa-book-reader"></i>
                  <p>
                    Client
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/contact" class="nav-link @yield('menuContact')">
                  <i class="nav-icon fas fa-address-book"></i>
                  <p>
                    Contact Us
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/navbar" class="nav-link @yield('menuNavbar')">
                <i class="nav-icon fas fa-tasks"></i>
                <p>
                    Navbar
                </p>
                </a>
            </li>
            <li class="nav-item">
              <a href="/footer" class="nav-link @yield('menuFooter')">
              <i class="nav-icon 	fas fa-copyright"></i>
              <p>
                  Footer
              </p>
              </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
