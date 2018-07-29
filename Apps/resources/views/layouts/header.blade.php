<header class="main-header">
  <!-- Logo -->
  <a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>K</b>RS</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>KRS </b>Online</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('dist/img/avatar5.png') }}" class="user-image" alt="User Image">
            <span class="hidden-xs">
              @if(Auth::user()->role == "admin")
              {{ Auth::user()->username }}
              @elseif(Auth::user()->role == "dosen")
              {{ Auth::user()->dosen->nama_dosen }}
              @elseif(Auth::user()->role == "mahasiswa")
              {{ Auth::user()->mahasiswa->nama_mahasiswa }}
              @endif
            </span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
              <p>

                @if(Auth::user()->role == "admin")
                {{ Auth::user()->username }}
                @elseif(Auth::user()->role == "dosen")
                {{ Auth::user()->dosen->nama_dosen }} - {{ Auth::user()->dosen->nidn }}
                @elseif(Auth::user()->role == "mahasiswa")
                {{ Auth::user()->mahasiswa->nama_mahasiswa }} - {{ Auth::user()->mahasiswa->nim }}
                @endif
              </p>
            </li>
            <!-- Menu Body -->
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{route(Auth::user()->role.'.resetpass')}}" class="btn btn-default btn-flat">Ubah Password</a>
              </div>
              <div class="pull-right">
                <a href="{{route('logout')}}" class="btn btn-default btn-flat">Keluar</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
        </li>
      </ul>
    </div>
  </nav>
</header>