 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Blue Algorithm</span>
    </a>
  
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          @if (Auth::user()->image!=NULL)
          <img class="profile-user-img img-fluid img-circle"
          src="/storage/profile_images/{{Auth::user()->image}}"
               alt="User profile picture"> 
          @else
          <img class="profile-user-img img-fluid img-circle"
          src="dist/img/avatar5.png" alt="User profile picture">  
          @endif

          
        </div>
        <div class="info">
        <a href="/admin-index" class="d-block">{{Auth::user()->fName}}</a>
        </div>
      </div>
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
  
          <li class="nav-item">
            <a href="/user-index" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          @if (Auth::user()->transStatus == 'success')
          <li class="nav-item">
            <a href="/receipt" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Receipt
              </p>
            </a>
          </li>
          @endif
          @if (Auth::user()->transStatus == 'success')
          <li class="nav-item">
            <a href="/pdf" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                PDF Files
              </p>
            </a>
          </li>
          @endif
          @if (Auth::user()->transStatus == 'success')
          <li class="nav-item">
            <a href="/watch-video" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                Video Tutorials
              </p>
            </a>
          </li>
          @endif
          @if (Auth::user()->transStatus == 'success')
          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="fas fa-users"></i>
              <p>
                My account
              </p>
            </a>
          </li>
          @endif
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
  