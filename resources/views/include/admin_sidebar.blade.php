 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="/admin-index" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/admin-index" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/members" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
              Registered members
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/news" class="nav-link">
            <i class="fas fa-blog"></i>
            <p>
              Post News
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/contacts" class="nav-link">
            <i class="fas fa-id-card-alt"></i>
            <p>
              Contact Us
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/video" class="nav-link">
            <i class="fas fa-id-card-alt"></i>
            <p>
              Video
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/file" class="nav-link">
            <i class="fas fa-id-card-alt"></i>
            <p>
              PDF file
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/certificate" class="nav-link">
            <i class="fas fa-blog"></i>
            <p>
              Certificate
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/applicants" class="nav-link">
            <i class="fas fa-users"></i>
            <p>
              Applicants
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/deposite" class="nav-link">
            <i class="fas fa-blog"></i>
            <p>
              Deposite
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
               <i class="fas fa-sign-out-alt"></i>
             {{ __('Logout') }}
         </a>
  
         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
