<header id="navbar"
  class="fixed top-0 left-0 h-[80px] w-full z-50 transition-all duration-300 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 backdrop-blur-sm shadow-md">

  <!-- TOP BAR -->
  <div class="mx-auto max-w-7xl px-4">
    <div class="flex h-16 items-center justify-between gap-4">
      
      <!-- Logo -->
      <a href="{{ route('home.index') }}" class="flex items-center space-x-2 shrink-0 mt-4">
        <img src="{{ asset('img/logosvg.png') }}" alt="Logo" class="h-12 w-auto">
        <span class="text-lg text-gray-700 font-semibold">Desa Tajur Halang</span>
      </a>

      <!-- NAV DESKTOP -->
      <nav class="hidden lg:flex items-center gap-6 mt-4">
        <a href="{{ route('home.index') }}" class="text-gray-700 hover:text-white font-semibold">Beranda</a>

        <!-- Dropdown Info Desa -->
        <div class="relative group">
          <button class="inline-flex items-center text-gray-700 hover:text-white font-semibold focus:outline-none">
            Profile Desa
            <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z" />
            </svg>
          </button>
          <div
            class="absolute right-0 mt-2 w-48 z-50 bg-white rounded-lg shadow-lg ring-1 ring-black/5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-150 origin-top-right">
            <a href="{{ route('home.profiledesa')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:rounded-lg">Program Kerja</a>
            <a href="{{ route('home.infografis')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:rounded-lg">Info Grafis</a>
            <a href="{{ route('home.bumdes')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:rounded-lg">Bumdes</a>
            <a href="{{ route('home.gallery')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:rounded-lg">Gallery</a>
          </div>
        </div>

        <a href="{{ route('home.potensi') }}" class="text-gray-700 hover:text-white font-semibold">Potensi Desa</a>
        <a href="{{ route('home.pengumuman') }}" class="text-gray-700 hover:text-white font-semibold">Pengumuman</a>
        <a href="{{ route('home.berita') }}" class="text-gray-700 hover:text-white font-semibold">Berita</a>

        @auth
          @if(Auth::user()->role === 'admin')
            <!-- Dropdown Admin Desktop -->
            <div class="relative group">
              <button class="inline-flex items-center text-gray-700 hover:text-white font-semibold focus:outline-none">
                Admin
                <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z" />
                </svg>
              </button>
              <div
                class="absolute right-0 mt-2 w-48 z-50 bg-white rounded-lg shadow-lg ring-1 ring-black/5 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-150 origin-top-right">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:rounded-lg">Dashboard Admin</a>
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-50 hover:rounded-lg">Logout</button>
                </form>
              </div>
            </div>
          @endif
        @endauth
      </nav>

      <!-- CTA DESKTOP -->
      <a href="{{ route('home.layanan') }}"
        class="hidden lg:inline-flex bg-green-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-700 transition mt-4">
        Layanan Desa
      </a>

      <!-- Hamburger (mobile & tablet only) -->
      <button id="menu-btn" aria-controls="mobile-menu" aria-expanded="false"
        class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none mt-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </div>

  <!-- MOBILE/TABLET MENU -->
  <div id="mobile-menu" class="lg:hidden hidden border-t border-gray-100 bg-white/80 backdrop-blur-md">
    <div class="px-4 py-3 space-y-2">
      <a href="{{ route('home.index') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Beranda</a>

      <!-- Info Desa mobile dropdown -->
      <div>
        <button id="info-toggle"
          class="w-full flex items-center justify-between px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">
          <span>Profile Desa</span>
          <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z" />
          </svg>
        </button>
        <div id="info-submenu" class="hidden pl-4">
          <a href="{{ route('home.profiledesa')}}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Program Kerja</a>
          <a href="{{ route('home.infografis')}}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Info Grafis</a>
          <a href="{{ route('home.bumdes')}}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Bumdes</a>
          <a href="{{ route('home.gallery')}}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Gallery</a>
        </div>
      </div>

      <a href="{{ route('home.potensi') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Potensi Desa</a>
      <a href="{{ route('home.pengumuman') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Pengumuman</a>
      <a href="{{ route('home.berita') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Berita</a>

      <a href="{{ route('home.layanan') }}"
        class="block text-center bg-green-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-700 transition">
        Layanan Desa
      </a>

      @auth
        @if(Auth::user()->role === 'admin')
          <!-- Admin Mobile Dropdown -->
          <div>
            <button id="admin-toggle"
              class="w-full flex items-center justify-between px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">
              <span>Admin</span>
              <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                <path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z" />
              </svg>
            </button>
            <div id="admin-submenu" class="hidden pl-4">
              <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Dashboard Admin</a>
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 text-sm text-red-600 hover:bg-gray-50">Logout</button>
              </form>
            </div>
          </div>
        @endif
      @endauth
    </div>
  </div>
</header>

<!-- Spacer -->
<div class="pt-20"></div>

<!-- JS -->
<script>
document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const infoToggle = document.getElementById('info-toggle');
    const infoSubmenu = document.getElementById('info-submenu');
    const adminToggle = document.getElementById('admin-toggle');
    const adminSubmenu = document.getElementById('admin-submenu');

    menuBtn?.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    infoToggle?.addEventListener('click', () => {
        infoSubmenu.classList.toggle('hidden');
    });

    adminToggle?.addEventListener('click', () => {
        adminSubmenu.classList.toggle('hidden');
    });

    // Scroll effect transparan
    window.addEventListener("scroll", () => {
        const navbar = document.getElementById("navbar");
        if (window.scrollY > 50) {
            navbar.classList.remove("from-blue-600", "via-teal-500", "to-emerald-500");
            navbar.classList.add("from-blue-600/70", "via-teal-500/70", "to-emerald-500/70", "backdrop-blur-sm");
        } else {
            navbar.classList.add("from-blue-600", "via-teal-500", "to-emerald-500");
            navbar.classList.remove("from-blue-600/70", "via-teal-500/70", "to-emerald-500/70", "backdrop-blur-sm");
        }
    });
});
</script>
