<header class="bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    <!-- Logo -->
    <a href="{{ route('home.index') }}" class="flex items-center space-x-2">
      <img src="{{ asset('img/logosvg.png') }}" alt="Logo" class="h-12 w-auto">
      <span class="text-lg text-gray-700 font-semibold">Desa Tajur Halang</span>
    </a>

    <!-- Hamburger Button (mobile) -->
    <button id="menu-btn" aria-controls="mobile-menu" aria-expanded="false"
            class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Navigation (Desktop) -->
    <nav class="hidden md:flex items-center space-x-6">
      <a href="{{ route('home.index') }}" class="text-gray-700 hover:text-white font-semibold">Beranda</a>

      <!-- Dropdown -->
      <div class="relative group">
        <button
          class="inline-flex items-center text-gray-700 hover:text-white font-semibold focus:outline-none"
          aria-haspopup="true">
          Info Desa
          <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z"/>
          </svg>
        </button>
        <div
          class="absolute right-0 mt-2 w-48 z-50 bg-white rounded-lg shadow-lg ring-1 ring-black/5
                 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-150 origin-top-right">
          <a href="{{ route('home.profiledesa')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">Profile Desa</a>
          <a href="{{ route('home.infografis')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">Info Grafis</a>
          <a href="{{ route('home.bumdes')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg">Bumdes</a>
          <a href="{{ route('home.gallery')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 rounded-lg ">Gallery</a>
        </div>
      </div>

      <a href="{{ route('home.potensi') }}" class="text-gray-700 hover:text-white font-semibold">Potensi Desa</a>
      <a href="{{ route('home.pengumuman') }}" class="text-gray-700 hover:text-white font-semibold">Pengumuman</a>
      <a href="{{ route('home.berita') }}" class="text-gray-700 hover:text-white font-semibold">Berita</a>
      @auth
        @if(Auth::user()->role === 'admin')
            <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-white font-semibold">Dashboard Admin</a>
        @endif
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Logout</button>
        </form>
      @else
          {{-- <a href="{{ route('login') }}" class="text-gray-700 hover:text-white font-semibold">Login</a> --}}
      @endauth

    </nav>

    <!-- CTA -->
    <div class="hidden md:flex items-center">
      <a href="{{ route('home.layanan') }}"
         class="bg-green-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-700 transition">
        Layanan Desa
      </a>
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden border-t border-gray-100">
    <div class="px-4 py-3 space-y-2">
      <a href="{{ route('home.index') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Beranda</a>

      <!-- Info Desa mobile dropdown -->
      <div>
        <button id="info-toggle" class="w-full flex items-center justify-between px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">
          <span>Info Desa</span>
          <svg id="info-caret" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
            <path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z"/>
          </svg>
        </button>
        <div id="info-submenu" class="hidden pl-4">
          <a href="{{ route('home.profiledesa')}}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Profile Desa</a>
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
            <a href="{{ route('admin.dashboard') }}" class="text-gray-700 hover:text-white font-semibold">Dashboard Admin</a>
        @endif
        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf
            <button type="submit" class="text-red-600 hover:text-red-800 font-semibold">Logout</button>
        </form>
      @else
          {{-- <a href="{{ route('login') }}" class="text-gray-700 hover:text-white font-semibold">Login</a> --}}
      @endauth

    </div>
  </div>
</header>

<!-- JavaScript -->
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const infoToggle = document.getElementById('info-toggle');
    const infoSubmenu = document.getElementById('info-submenu');

    menuBtn?.addEventListener('click', () => {
      const isHidden = mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      menuBtn.setAttribute('aria-expanded', String(isHidden));
    });

    infoToggle?.addEventListener('click', () => {
      infoSubmenu.classList.toggle('hidden');
    });
  });
</script>
