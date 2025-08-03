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
        Interface
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Customer</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Customer</h6>
                {{-- <a class="collapse-item" href="login.html">Data All User</a> --}}
                <a class="collapse-item" href="#">Data Akun All</a>
                <a class="collapse-item" href="#">Data Problem Customer</a>
                <a class="collapse-item" href="#">Data Pesan Support</a>
                <a class="collapse-item" href="register.html">Data Ulasan</a>
                <a class="collapse-item" href="forgot-password.html">Data Pesanasan</a>
                
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Product</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage Product</h6>
                <a class="collapse-item" href="#">Fruits</a>
                <a class="collapse-item" href="#">Fasions</a>
                <a class="collapse-item" href="#">Electronic</a>
                <a class="collapse-item" href="#">Pets</a>
                <a class="collapse-item" href="#">Toys</a>
                <a class="collapse-item" href="#">Medicane</a>
                <a class="collapse-item" href="#">Ads</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>About</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manage About</h6>
                <a class="collapse-item" href="#">Team</a>
                <a class="collapse-item" href="utilities-border.html">Testimony</a>
                <a class="collapse-item" href="utilities-animation.html">Distributor</a>
                <a class="collapse-item" href="utilities-other.html">Partner</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="/" target="_blank" >
            <i class="fas fa-fw fa-table"></i>
            <span>Beranda</span></a>
    </li>

      <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
            
            
         
@endsection