{{-- SECTION: Potensi Desa --}}
<section class="relative">
  {{-- Header hijau + judul --}}
  <div
      class="relative shadow-md text-white py-16 md:py-20
            bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500">
      <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.15)_1px,transparent_1px)] bg-[size:16px_16px]"></div>
      <div class="relative max-w-7xl mx-auto px-4">
        <h2 class="text-3xl md:text-5xl font-extrabold text-center">Potensi Desa</h2>
      </div>
  </div>

  {{-- Grid kartu, dibuat sedikit “mengambang” dari header --}}
  <div class="max-w-7xl mx-auto px-4 -mt-10 mt-20 pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

      {{-- CARD 1 --}}
      <a href="{{ route('home.perternakan')}}" class="bg-white rounded-xl shadow border hover:shadow-lg hover:scale-105 hover:border-green-400 hover:bg-green-50 transition duration-300 ease-in-out mt-8 overflow-hidden">
        <img src="{{ asset('img/perternakan12.jpg')}}"
            alt="Pertanian Desa Tajur Halang"
            class="w-full aspect-[16/9] object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-2xl font-extrabold text-gray-900">
            Perternakan Desa Tajur Halang
          </h3>
          <p class="mt-3 text-gray-600 leading-relaxed">
            Pengelolaan ternak yang berkelanjutan untuk meningkatkan produktivitas dan kesejahteraan peternak. Program pembinaan dan akses pasar disiapkan agar hasil peternakan memberi nilai tambah bagi masyarakat desa Tajur Halang.
          </p>
          <div class="mt-auto pt-6">
            <h1 class="font-bold text-green-500">Potensi Desa</h1>
            <div class="h-1.5 w-24 bg-green-600 rounded-full transition-all duration-300 group-hover:w-32"></div>
          </div>
        </div>
      </a>
      <a href="{{ route('home.pertanian')}}" class="bg-white rounded-xl shadow border hover:shadow-lg hover:scale-105 hover:border-green-400 hover:bg-green-50 transition duration-300 ease-in-out mt-8 overflow-hidden">
        <img src="{{ asset('img/pertanian.jpeg')}}"
            alt="Pertanian Desa Tajur Halang"
            class="w-full aspect-[16/9] object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-2xl font-extrabold text-gray-900">
            Pertanian Desa Tajur Halang
          </h3>
          <p class="mt-3 text-gray-600 leading-relaxed">
            Sistem tanam dan pengelolaan lahan difokuskan pada peningkatan hasil dan keberlanjutan lingkungan. Dukungan teknologi sederhana dan pelatihan akan mempermudah petani meningkatkan kualitas dan pemasaran produk.
          </p>
          <div class="mt-auto pt-6">
            <h1 class="font-bold text-green-500">Potensi Desa</h1>
            <div class="h-1.5 w-24 bg-green-600 rounded-full transition-all duration-300 group-hover:w-32"></div>
          </div>
        </div>
      </a>
      <a href="{{ route('home.umkm')}}" class="bg-white rounded-xl shadow border hover:shadow-lg hover:scale-105 hover:border-green-400 hover:bg-green-50 transition duration-300 ease-in-out mt-8 overflow-hidden">
        <img src="{{ asset('img/umkm.jpg')}}"
            alt="Pertanian Desa Tajur Halang"
            class="w-full aspect-[16/9] object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-2xl font-extrabold text-gray-900">
            UMKM Desa Tajur Halang
          </h3>
          <p class="mt-3 text-gray-600 leading-relaxed">
            Pelaku usaha mikro dan kecil diberi ruang untuk berkembang melalui pelatihan, permodalan, dan jaringan pemasaran. Kolaborasi antar pelaku dan inovasi produk diupayakan untuk memperkuat daya saing lokal.
          </p>
          <div class="mt-auto pt-6">
            <h1 class="font-bold text-green-500">Potensi Desa</h1>
            <div class="h-1.5 w-24 bg-green-600 rounded-full transition-all duration-300 group-hover:w-32"></div>
          </div>
        </div>
      </a>
      <a href="{{ route('home.wisata')}}" class="bg-white rounded-xl shadow border hover:shadow-lg hover:scale-105 hover:border-green-400 hover:bg-green-50 transition duration-300 ease-in-out mt-8 overflow-hidden">
        <img src="{{ asset('img/wisata.jpeg')}}"
            alt="Pertanian Desa Tajur Halang"
            class="w-full aspect-[16/9] object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-2xl font-extrabold text-gray-900">
            Wisata Desa Tajur Halang
          </h3>
          <p class="mt-3 text-gray-600 leading-relaxed">
            Sumber daya alam dan budaya desa dikembangkan menjadi daya tarik wisata yang ramah lingkungan dan berkelanjutan. Fasilitasi infrastruktur dan pelatihan pelayanan bertujuan meningkatkan pengalaman pengunjung serta manfaat ekonomi bagi warga.
          </p>
          <div class="mt-auto pt-6">
            <h1 class="font-bold text-green-500">Potensi Desa</h1>
            <div class="h-1.5 w-24 bg-green-600 rounded-full transition-all duration-300 group-hover:w-32"></div>
          </div>
        </div>
      </a>
      <a href="{{ route('home.potensilainya')}}" class="bg-white rounded-xl shadow border hover:shadow-lg hover:scale-105 hover:border-green-400 hover:bg-green-50 transition duration-300 ease-in-out mt-8 overflow-hidden">
        <img src="{{ asset('img/tanah.jpg')}}"
            alt="Pertanian Desa Tajur Halang"
            class="w-full aspect-[16/9] object-cover transition-transform duration-300 group-hover:scale-105">
        <div class="p-6 flex-1 flex flex-col">
          <h3 class="text-2xl font-extrabold text-gray-900">
            Potensi Desa Lainya
          </h3>
          <p class="mt-3 text-gray-600 leading-relaxed">
            Potensi sumber daya lokal lainnya diinventarisasi dan disinergikan untuk menciptakan peluang usaha baru. Pendampingan dan promosi terpadu akan membantu memaksimalkan manfaat sosial-ekonomi bagi komunitas desa.
          </p>
          <div class="mt-auto pt-6">
            <h1 class="font-bold text-green-500">Potensi Desa</h1>
            <div class="h-1.5 w-24 bg-green-600 rounded-full transition-all duration-300 group-hover:w-32"></div>
          </div>
        </div>
      </a>
      
      



      

    </div>
  </div>
</section>
