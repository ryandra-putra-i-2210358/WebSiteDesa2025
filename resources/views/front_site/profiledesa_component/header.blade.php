{{-- SECTION: Profile Desa --}}
<section class="relative">
  {{-- Header hijau + judul --}}
  <div class="bg-green-700 text-white py-16 md:py-20 bg-[radial-gradient(#25633d_1px,transparent_1px)] bg-[size:16px_16px]">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold text-center">Profile Desa</h2>
    </div>
  </div>

  {{-- Section Tentang Desa --}}
  <div class="max-w-7xl mx-auto px-4 mt-10">
    <div class="relative rounded-2xl overflow-hidden mb-8">
      <!-- Background image -->
      <img src="{{ asset('img/tanah.jpg')}}" alt="Background Desa" class="w-full h-[300px] md:h-[800px] lg:h-[500px] object-cover">


      <!-- Overlay -->
      <div class="absolute inset-0 bg-black/40"></div>

      <!-- Content wrapper -->
      <div class="absolute inset-0 flex flex-col md:flex-row items-center justify-between p-10 text-white">
        <!-- Keterangan Desa -->
        <div class="max-w-xl">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Desa Tajur Halang</h1>
          <p class="text-lg mb-6">LHPD Desa Tukadaya, Kecamatan Melaya, Kabupaten Jembrana, Bali.</p>
          <a href="{{ route('home.potensi')}}" class="inline-block px-6 py-3 bg-green-600 hover:bg-green-700 rounded-full font-semibold text-white transition">
            Lihat Potensi
          </a>
        </div>

        <!-- Card Kepala Desa -->
        <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 w-full max-w-md mt-10 md:mt-0 md:ml-10">
          <div class="flex items-center gap-4 mb-4">
            <img src="{{ asset('img/tanah.jpg')}}" alt="Kepala Desa" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-bold">Apud Adriansyah</h3>
              <p class="text-green-600 font-medium">Kepala Desa Tajur Halang</p>
            </div>
          </div>
          <p class="text-gray-700 mb-4">
            Selamat datang di Desa Tukadaya, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere
            mattis dolor, ut porttitor nulla sollicitudin quis.
          </p>
          <img src="{{ asset('img/tanda.png')}}" alt="Tanda Tangan" class="w-24">
        </div>
      </div>
    </div>
  </div>

  {{-- Grid Potensi (bisa lanjut isi kartu potensi di bawah sini) --}}
  
</section>
