@section('navitem-admin')
    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard Admin</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Navigasi
    </div>
    
    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-info-circle"></i>
            <span>Info Desa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Info Desa</h6>
                <a class="collapse-item" href="{{ route('admin.profiles.index')}}">Profile Desa</a>
                <a class="collapse-item" href="#">Info Grafis</a>
                <a class="collapse-item" href="#">Bumdes</a>
                <a class="collapse-item" href="{{ route('admin.gallerys.index')}}">Gallery</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePotensi"
            aria-expanded="false" aria-controls="collapsePotensi">
            <i class="fas fa-cubes"></i>
            <span>Potensi Desa</span>
        </a>
        <div id="collapsePotensi" class="collapse" aria-labelledby="headingPotensi" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Potensi Desa</h6>
                <a class="collapse-item" href="{{ route('admin.perternakans.index')}}">Perternakan</a>
                <a class="collapse-item" href="#">Pertanian</a>
                <a class="collapse-item" href="#">UMKM</a>
                <a class="collapse-item" href="#">Wisata</a>
                <a class="collapse-item" href="#">Lainya</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaturan"
            aria-expanded="false" aria-controls="collapsePengaturan">
            <i class="fas fa-user"></i>
            <span>Pengaturan Lainya</span>
        </a>
        <div id="collapsePengaturan" class="collapse" aria-labelledby="headingPengaturan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Pengaturan Lainya</h6>
                <a class="collapse-item" href="{{ route('admin.village_heads.index')}}">Bio Kepala Desa</a>
                <a class="collapse-item" href="{{ route('admin.history_heads.index')}}">History Kepala Desa</a>
                <a class="collapse-item" href="{{ route('admin.sliders.index')}}">Slider</a>
            </div>
        </div>
    </li>

    
    <!-- Nav Item - Pages Collapse Menu -->

    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.pengumumans.index')}}">
           	<i class="fas fa-bullhorn"></i>
            <span>Pengumuman</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.news.index') }}">
            <i class="fas fa-newspaper"></i>
            <span>Berita</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.layanans.index')}}">
            <i class="fas fa-hands-helping"></i>
            <span>Layanan Desa</span></a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="/" target="_blank">
            <i class="fas fa-home"></i>
            <span>Beranda</span></a>
    </li>

      <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
            
            
         
@endsection