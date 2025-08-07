<section class="bg-white py-10 px-6 md:px-12">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

      
      <!-- Kolom Kiri: Berita Desa -->
      <div class="md:col-span-2 space-y-6">
          <h2 id="berita" class="text-xl font-semibold text-gray-800">Berita Desa</h2>
          <div class="px-5 py-3 text-green-600 text-sm font-semibold border-t border-gray-200 text-right hover:underline">
                <a href="{{ route('home.berita')}}">Lihat Semua →</a>
          </div>
          
      <!-- Satu item berita -->
      @foreach($news as $item)
        <a href="{{ route('home.berita.show', $item->slug) }}" class="flex gap-4">
            <img src="{{ asset($item->image) }}" alt="Berita" class="w-32 h-24 rounded-md object-cover">
            <div class="flex-1">
            <h3 class="font-semibold text-gray-800">
                  {{ $item->title}}
            </h3>
            <p class="text-sm text-gray-500 flex items-center gap-2 mt-1">
                <span class="text-green-600">🟢 {{ $item->penulis }}</span> · <span>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</span>

            </p>
            <p class="text-sm text-gray-600 mt-1 line-clamp-2 leading-relaxed text-justify">
                {{ $item->content}}
            </p>
            </div>
        </a>
      @endforeach
        

      <!-- Tambahkan berita berikutnya dengan blok <div class="flex gap-4">...</div> -->

      <!-- Pagination -->
      

<!-- Pagination -->
      <div class="flex items-center justify-center gap-2 pt-4">
        @for ($i = 1; $i <= $news->lastPage(); $i++)
            <a href="?page={{ $i }}#berita"
              class="w-8 h-8 rounded-full flex items-center justify-center
                      {{ $news->currentPage() == $i ? 'border border-green-500 text-green-600 font-semibold' : 'text-gray-600 hover:text-green-600' }}">
                {{ $i }}
            </a>
        @endfor
      </div>

    </div>

    <!-- Kolom Kanan: Kepala Desa dan Potensi -->
    <div class="space-y-6">

      <!-- Card Kepala Desa -->
      <div class="group p-4 border rounded-xl hover:border-green-500 duration-300">
        <h3 class="text-lg font-semibold text-gray-800 mb-3">Kepala Desa</h3>
        <div class="flex items-center gap-4">
          <img src="/img/kepala-desa.jpg" class="w-16 h-16 rounded-full object-cover">
          <div>
            <p class="font-bold text-gray-800">Apud Adriansyah S.E</p>
            <p class="text-sm text-green-600">Kepala Desa Tajur Halanng</p>
          </div>
        </div>
        <p class="text-sm text-gray-600 mt-3 leading-relaxed text-justify">
          Selamat datang di Desa Tajur Halang, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere mattis dolor.
        </p>
        <img src="{{ asset('img/tanda.png')}}" alt="Tanda Tangan" class="mt-4 w-16">
      </div>

      <!-- Card Potensi Desa -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200">
        <div class="bg-green-600 text-white font-semibold px-5 py-3 rounded-t-xl">
          Potensi Desa
        </div>
        <ul class="divide-y divide-gray-200">
          <a href="{{ route('home.perternakan')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
            <img src="/img/seni.jpg" class="w-8 h-8 rounded-full object-cover" alt="">
            <span class="text-gray-800 text-sm flex-1">Perternakan Desa Tajur Halang</span>
            <span class="text-gray-400"></span>
          </a>
          <a href="{{ route('home.pertanian')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
            <img src="/img/pantai.jpg" class="w-8 h-8 rounded-full object-cover" alt="">
            <span class="text-gray-800 text-sm flex-1">Pertanian Desa Tajur Halang</span>
            <span class="text-gray-400"></span>
          </a>
          <a href="{{ route('home.umkm')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
            <img src="/img/pantai.jpg" class="w-8 h-8 rounded-full object-cover" alt="">
            <span class="text-gray-800 text-sm flex-1">UMKM Desa Tajur Halang</span>
            <span class="text-gray-400"></span>
          </a>
          <a href="{{ route('home.wisata')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
            <img src="/img/pantai.jpg" class="w-8 h-8 rounded-full object-cover" alt="">
            <span class="text-gray-800 text-sm flex-1">Wisata Desa Tajur Halang</span>
            <span class="text-gray-400"></span>
          </a>
          <a href="{{ route('home.potensilainya')}}" class="flex items-center gap-3 px-5 py-3 hover:bg-gray-50">
            <img src="/img/pantai.jpg" class="w-8 h-8 rounded-full object-cover" alt="">
            <span class="text-gray-800 text-sm flex-1">Potensi Lainya</span>
            <span class="text-gray-400"></span>
          </a>
          <!-- Tambah item lainnya sesuai kebutuhan -->
        </ul>
        <div class="px-5 py-3 text-green-600 text-sm font-semibold border-t border-gray-200 text-right hover:underline">
          <a href="{{ route('home.potensi')}}">Lihat Semua Potensi Desa →</a>
        </div>
      </div>

    </div>

  </div>
</section>
