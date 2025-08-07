<section class="relative">
  <div class="swiper mySwiper h-[650px]">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="relative h-[650px] w-full">
          <img src="/img/tanah.jpg" class="h-full w-full object-cover" alt="Tanah" />
          <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Desa Tajur Halang</h1>
            <p class="text-white mt-4 max-w-2xl">Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="relative h-[650px] w-full">
          <img src="/img/logosvg.png" class="h-full w-full object-cover" alt="Keindahan Alam" />
          <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Keindahan Alam</h1>
            <p class="text-white mt-4 max-w-2xl">Sawah yang menghijau sepanjang tahun.</p>
          </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="relative h-[650px] w-full">
          <img src="/img/tanda.png" class="h-full w-full object-cover" alt="Kegiatan Warga" />
          <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Kegiatan Warga</h1>
            <p class="text-white mt-4 max-w-2xl">Gotong royong dan kebersamaan desa kami.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Titik navigasi -->
    <div class="swiper-pagination"></div>
  </div>
</section>

<!-- Swiper JS -->


<!-- Menu Ikon -->
<section class="bg-white py-8 mt-3">
  <div class="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-6 gap-4 text-center">
    
    <!-- CARD -->
    <a href="{{ route('home.profiledesa')}}" class="group p-4 border rounded-xl transition transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
      <div class="text-green-600 text-2xl group-hover:scale-125 transition duration-300">🎯</div>
      <p class="mt-2 font-medium text-gray-800 group-hover:text-green-600 transition">Profile Desa</p>
    </a>

    <a href="{{ route('home.infografis')}}" class="group p-4 border rounded-xl transition transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
      <div class="text-green-600 text-2xl group-hover:scale-125 transition duration-300">📊</div>
      <p class="mt-2 font-medium text-gray-800 group-hover:text-green-600 transition">Infografis</p>
    </a>

    <a href="{{ route('home.bumdes')}}" class="group p-4 border rounded-xl transition transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
      <div class="text-green-600 text-2xl group-hover:scale-125 transition duration-300">🏢</div>
      <p class="mt-2 font-medium text-gray-800 group-hover:text-green-600 transition">Bumdes</p>
    </a>

    <a href="{{ route('home.potensi') }}" class="group p-4 border rounded-xl transition transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
      <div class="text-green-600 text-2xl group-hover:scale-125 transition duration-300">🌾</div>
      <p class="mt-2 font-medium text-gray-800 group-hover:text-green-600 transition">Potensi</p>
    </a>

    <a href="{{ route('home.layanan')}}" class="group p-4 border rounded-xl transition transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
      <div class="text-green-600 text-2xl group-hover:scale-125 transition duration-300">📨</div>
      <p class="mt-2 font-medium text-gray-800 group-hover:text-green-600 transition">Layanan Desa</p>
    </a>

    <a href="{{ route('home.berita')}}" class="group p-4 border rounded-xl transition transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
      <div class="text-green-600 text-2xl group-hover:scale-125 transition duration-300">📰</div>
      <p class="mt-2 font-medium text-gray-800 group-hover:text-green-600 transition">Berita</p>
    </a>
    
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper(".mySwiper", {
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });
</script>

