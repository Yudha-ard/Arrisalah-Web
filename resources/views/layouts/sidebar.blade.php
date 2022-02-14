      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
          <div class="sidebar-brand-icon">
            <img src="{{ asset('frontend/img/logo/arrisalah.png') }}" alt="Logo" height="55" width="80">
          </div>
          <div class="sidebar-brand-text mx-3 ">AR-RISALAH DASHBOARD</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-2">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="{{url('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#BeritaS" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Berita</span>
          </a>
          <div id="BeritaS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('dashboard/berita') }}">Berita</a>
              <a class="collapse-item" href="{{ url('dashboard/kategori_berita') }}">Kategori Berita</a>
            </div>
          </div>
        </li>
        <!-- Divider -->
       
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#GaleriS" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-images"></i>
            <span>Galeri</span>
          </a>
          <div id="GaleriS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('dashboard/galeri') }}">Galeri</a>
              <a class="collapse-item" href="{{ url('dashboard/kategori_galeri') }}">Kategori Galeri</a>
            </div>
          </div>
        </li>
        <!-- Divider -->
       
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#KegiatanS" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-skating"></i>
            <span>Kegiatan</span>
          </a>
          <div id="KegiatanS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('dashboard/kegiatan') }}">Kegiatan</a>
            </div>
          </div>
        </li>
        
        <!-- Divider -->
       
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#PengajarS" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Pengajar</span>
          </a>
          <div id="PengajarS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('dashboard/pengajar') }}">Pengajar</a>
              <a class="collapse-item" href="{{ url('dashboard/kategori_pengajar') }}">Identitas</a>
            </div>
          </div>
        </li>
        <!-- Divider -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#FasilitasS" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Fasilitas</span>
          </a>
          <div id="FasilitasS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('dashboard/fasilitas') }}">Fasilitas</a>
            </div>
          </div>
        </li>  
        <hr class="sidebar-divider d-none d-md-block">
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#RegisterS" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Register</span>
          </a>
          <div id="RegisterS" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <a class="collapse-item" href="{{ url('register') }}">Tambah Akun</a>
            </div>
          </div>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>