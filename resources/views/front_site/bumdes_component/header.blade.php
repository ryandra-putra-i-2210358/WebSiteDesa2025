{{-- SECTION: Potensi Desa --}}
<section class="relative">
  {{-- Header hijau + judul --}}
  <div
    class="relative shadow-md text-white py-16 md:py-20
          bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500">
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.15)_1px,transparent_1px)] bg-[size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold text-center">Bumdes</h2>
    </div>
  </div>

  {{-- Konten utama --}}
  <div class="max-w-7xl mx-auto px-4 -mt-10 pb-12">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      
      {{-- Kolom konten kiri (artikel utama) --}}
      <div class="lg:col-span-2 space-y-8 mt-[100px]">
        
        {{-- Tentang Bumdes --}}
        <div>
          <h3 class="text-2xl font-bold mb-3">Tentang Bumdes Tajur Halang</h3>
          <p class="text-gray-700 mb-8 text-justify">
            Bumdes Tajur Halang adalah badan usaha milik desa yang berperan dalam mengelola potensi dan aset desa secara profesional untuk meningkatkan kesejahteraan masyarakat. 
            Melalui berbagai program, kami berupaya mendorong pertumbuhan ekonomi lokal, menciptakan lapangan kerja, dan menjaga kearifan budaya desa agar tetap lestari di tengah perkembangan zaman.
          </p>

          <img src="{{ asset('img/tanah.jpg')}}" alt="Foto Bumdes" class="rounded-lg shadow">
        </div>

        {{-- Layanan LPD --}}
        <div>
          <h3 class="text-2xl font-bold mb-3">Layanan Bumdes Tajur Halang</h3>
          <p class="text-gray-700 mb-4 text-justify mb-8">
            Bumdes Tajur Halang hadir untuk memberikan layanan terbaik bagi masyarakat desa, mulai dari pengelolaan sumber daya lokal, 
            penyediaan produk unggulan desa, hingga pengembangan usaha mikro yang mendukung perekonomian warga. 
            Kami berkomitmen untuk menghadirkan inovasi, transparansi, dan pelayanan yang berorientasi pada kebutuhan masyarakat. 
            Melalui layanan kami, diharapkan tercipta lingkungan desa yang mandiri, produktif, dan sejahtera, 
            sehingga potensi yang ada di desa dapat dimanfaatkan secara optimal untuk kepentingan bersama.
          </p>
          
          <a href="{{ route('home.layanan')}}" 
            class="inline-flex items-center justify-center rounded-2xl px-5 py-3 text-sm font-semibold text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 hover:from-blue-700 hover:via-teal-600 hover:to-emerald-600">
            Lihat Layanan
          </a>
        </div>


        {{-- Pengurus Bumdes --}}
        
        <div>
          <h3 class="text-2xl font-bold mt-[100px]">Pengurus Bumdes</h3>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            
            @foreach($bumdess as $bumdes)
              <div class="flex border items-center gap-3 bg-white p-4 rounded-lg shadow mt-5 hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
                <img src="{{ asset($bumdes->image)}}" class="w-16 h-16 rounded-full object-cover">
                <div>
                  <h4 class="font-semibold">{{$bumdes->name}}</h4>
                  <p class="text-gray-500 text-sm">{{$bumdes->jabatan}}</p>
                </div>
              </div>
            @endforeach


          </div>
        </div>

      </div>

      {{-- Kolom kanan (sidebar) --}}
      <div class="space-y-6 mt-[100px]">

        {{-- Potensi Desa --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-200">
          <div class="bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 shadow-md text-white font-semibold px-5 py-3 rounded-t-xl">
            Potensi Desa
          </div>
          <ul class="divide-y divide-gray-200">
            <a href="{{ route('home.perternakan')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
              <img src="{{ asset('img/1.jpeg')}}" class="w-8 h-8 rounded-full object-cover" alt="">
              <span class="text-gray-800 text-sm flex-1">Perternakan Desa Tajur Halang</span>
              <span class="text-gray-400"></span>
            </a>
            <a href="{{ route('home.pertanian')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
              <img src="{{ asset('img/2.jpeg')}}" class="w-8 h-8 rounded-full object-cover" alt="">
              <span class="text-gray-800 text-sm flex-1">Pertanian Desa Tajur Halang</span>
              <span class="text-gray-400"></span>
            </a>
            <a href="{{ route('home.umkm')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
              <img src="{{ asset('img/3.jpeg')}}" class="w-8 h-8 rounded-full object-cover" alt="">
              <span class="text-gray-800 text-sm flex-1">UMKM Desa Tajur Halang</span>
              <span class="text-gray-400"></span>
            </a>
            <a href="{{ route('home.wisata')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
              <img src="{{ asset('img/4.jpeg')}}" class="w-8 h-8 rounded-full object-cover" alt="">
              <span class="text-gray-800 text-sm flex-1">Wisata Desa Tajur Halang</span>
              <span class="text-gray-400"></span>
            </a>
            <a href="{{ route('home.potensilainya')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
              <img src="{{ asset('img/5.jpeg')}}" class="w-8 h-8 rounded-full object-cover" alt="">
              <span class="text-gray-800 text-sm flex-1">Potensi Lainya</span>
              <span class="text-gray-400"></span>
            </a>
            <!-- Tambah item lainnya sesuai kebutuhan -->
          </ul>
          <div class="px-5 py-3 text-green-600 text-sm font-semibold border-t border-gray-200 text-right hover:underline">
            <a href="{{ route('home.potensi')}}">Lihat Semua Potensi Desa →</a>
          </div>
        </div>
          {{-- Ketua Bumdes --}}
        <div class="bg-white rounded-lg shadow p-4 text-center mt-20">
          <img src="{{ asset('img/logosvg.png')}}" class="w-[100px] h-[130px] mx-auto mb-3">
          <h4 class="font-semibold">Bumdes Tajur Halang</h4>
          <p class="text-gray-500 text-sm mt-1">
            Selamat datang di Desa Tajur Halang , Kami hadir untuk mengelola potensi desa dan memberikan manfaat bagi seluruh warga melalui berbagai program inovatif dan berkelanjutan.
          </p>
          {{-- <img src="https://via.placeholder.com/80x40" alt="Tanda tangan" class="mx-auto mt-3"> --}}
        </div>

      </div>
    </div>
  </div>
</section>

