<header class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    <!-- Logo -->
    <a href="{{ route('index') }}" class="flex items-center space-x-2">
      <img src="{{ asset('img/logosvg.png') }}" alt="Logo" class="h-12 w-auto">
      <span class="text-lg text-gray-700 font-semibold">Desa Tajur Halang</span>
    </a>

    <!-- Hamburger (mobile) -->
    <button id="menu-btn" aria-controls="mobile-menu" aria-expanded="false"
            class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-100 focus:outline-none">
      <!-- icon -->
      <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
        <path d="M4 6h16M4 12h16M4 18h16"/>
      </svg>
    </button>

    <!-- Navigation (desktop) -->
    <nav class="hidden md:flex items-center space-x-6">
      <a href="{{ route('index') }}" class="text-gray-700 hover:text-green-600 font-semibold">Beranda</a>

      <!-- Info Desa (dropdown) -->
        <!-- Info Desa (dropdown) -->
        <div class="relative group">
        <button
            class="inline-flex items-center text-gray-700 hover:text-green-600 font-semibold focus:outline-none"
            aria-haspopup="true" aria-expanded="false">
            Info Desa
            <svg class="ml-1 h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
            <path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z"/>
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div class="absolute right-0 mt-2 w-48 z-50 bg-white rounded-lg shadow-lg ring-1 ring-black/5 invisible opacity-0 scale-95 group-hover:visible group-hover:opacity-100 group-hover:scale-100
                group-focus-within:visible group-focus-within:opacity-100 group-focus-within:scale-100
                hover:visible hover:opacity-100 hover:scale-100
                transition-all duration-150 origin-top-right">
            <a href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Info</a>
            <a href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">List Desa</a>
            <a href="#"
            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">Jadwal</a>
        </div>
        </div>


      <a href="{{ route('potensi') }}" class="text-gray-700 hover:text-green-600 font-semibold">Potensi Desa</a>
      <a href="{{ route('pengumuman') }}" class="text-gray-700 hover:text-green-600 font-semibold">Pengumuman</a>
      <a href="{{ route('berita') }}" class="text-gray-700 hover:text-green-600 font-semibold">Berita</a>
    </nav>

    <!-- Call to Action -->
    <div class="hidden md:flex items-center">
      <a href="{{ route('layanan') }}"
         class="bg-green-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-700 transition">
        Layanan Desa
      </a>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobile-menu" class="md:hidden hidden border-t border-gray-100">
    <div class="px-4 py-3 space-y-2">
      <a href="{{ route('index') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Beranda</a>

      <!-- Info Desa (submenu mobile) -->
      <div>
        <button id="info-toggle"
                class="w-full flex items-center justify-between px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">
          <span>Info Desa</span>
          <svg id="info-caret" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M5.23 7.21L10 12l4.77-4.79-1.42-1.42L10 9.17 6.65 5.79 5.23 7.21z"/></svg>
        </button>
        <div id="info-submenu" class="hidden pl-4">
          <a href="#" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Info</a>
          <a href="#" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">List Desa</a>
          <a href="#" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 text-sm">Jadwal</a>
        </div>
      </div>

      <a href="{{ route('potensi') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Potensi Desa</a>
      <a href="{{ route('pengumuman') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Pengumuman</a>
      <a href="{{ route('berita') }}" class="block px-3 py-2 rounded-md text-gray-700 hover:bg-gray-50 font-semibold">Berita</a>

      <a href="{{ route('layanan') }}"
         class="block text-center bg-green-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-green-700 transition">
        Layanan Desa
      </a>
    </div>
  </div>
</header>

<!-- JS kecil untuk toggle mobile -->
<script>
  (function () {
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
  })();
</script>
