<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/admin') }}">
            <img src="{{ asset('img/bagus.png') }}" alt="Logo" class="img-fluid" style="height: 50px; width: auto;">
        </a>
        <a class="sidebar-brand brand-logo-mini d-lg-none" href="{{ url('/admin') }}">
            <img src="{{ asset('img/bagus.png') }}" alt="Logo Mini" class="img-fluid" style="height: 30px; width: auto;">
        </a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('assets/images/faces/face15.jpg')}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
              <span>Admin</span>
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link"</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('admin/user')}}">
          <span class="menu-icon">
            <i class="bi bi-person-circle"></i>
          </span>
          <span class="menu-title">User</span>
        </a>
      </li>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('admin/wasit') }}">
          <span class="menu-icon">
            <i class="bi bi-people"></i>
          </span>
          <span class="menu-title">Referee</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('admin/pelatih') }}">
          <span class="menu-icon">
            <i class="bi bi-person-workspace"></i>
          </span>
          <span class="menu-title">Coach</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('admin/atlet') }}">
          <span class="menu-icon">
            <i class="bi bi-people"></i>
          </span>
          <span class="menu-title">Atlet</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('admin/pertandingan') }}">
          <span class="menu-icon">
            <i class="bi bi-trophy"></i>
          </span>
          <span class="menu-title">Match</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('admin/berita') }}">
          <span class="menu-icon">
            <i class="bi bi-newspaper"></i>
          </span>
          <span class="menu-title">Berita</span>
        </a>
      </li>
    </ul>
  </nav>
