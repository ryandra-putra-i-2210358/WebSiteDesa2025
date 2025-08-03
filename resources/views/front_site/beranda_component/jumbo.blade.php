<section class="relative bg-cover bg-center h-[650px]" style="background-image: url('/img/tanah.jpg')">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-white">Desa Tajur Halang</h1>
        <p class="text-white mt-4 max-w-2xl">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut scelerisque urna.
        </p>

        <!-- Search -->
        <div class="mt-6 w-full max-w-lg">
            <div class="flex bg-white rounded-full shadow overflow-hidden">
                <input type="text" placeholder="Cari informasi ..." class="flex-1 px-4 py-2 rounded-l-full focus:outline-none">
                <button class="bg-green-600 text-white px-4 py-2 rounded-r-full hover:bg-green-700 transition">
                    🔍
                </button>
            </div>
        </div>
    </div>
</section>

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
