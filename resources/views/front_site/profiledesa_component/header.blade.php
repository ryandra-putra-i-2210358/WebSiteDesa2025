{{-- SECTION: Profile Desa --}}
<section class="relative">

  {{-- Header Hijau + Judul --}}
  <div class="relative shadow-md text-white py-16 md:py-20 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500">
    <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.15)_1px,transparent_1px)] bg-[size:16px_16px]"></div>
    <div class="relative max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold text-center">Profile Desa</h2>
    </div>
  </div>

  {{-- Section Tentang Desa --}}
  <div class="max-w-7xl mx-auto px-4 mt-10">
    <img src="{{ asset('img/tanah.jpg')}}" 
      alt="Background Desa"
      class="w-full h-auto max-h-[600px] rounded-t-lg object-cover ">
    <div class="relative overflow-hidden rounded-b-lg mb-8">

      {{-- Background --}}

      {{-- Overlay --}}
      <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500"></div>

      {{-- Content Wrapper --}}
      <div class="relative flex flex-col md:flex-row items-center justify-between p-6 md:p-10 text-white">

        {{-- Keterangan Desa --}}
        <div class="max-w-xl">
          <h1 class="text-3xl md:text-5xl font-bold mb-4 mt-8">Tentang Desa Tajur Halang</h1>
          <p class="mb-6 text-justify leading-relaxed">
            Desa Tajur Halang merupakan salah satu desa yang terletak di Kecamatan Cijeruk, Kabupaten Bogor, Jawa Barat.
            Desa ini dikenal dengan suasana pedesaannya yang masih asri, dikelilingi oleh hamparan persawahan, perkebunan,
            dan pemandangan alam pegunungan yang indah. Selain memiliki berbagai potensi pertanian dan perkebunan yang cukup
            besar, masyarakat Desa Tajur Halang juga menjunjung tinggi nilai gotong royong serta menjaga kearifan lokal yang
            menjadi ciri khas kehidupan desa. Dengan letak geografis yang strategis, desa ini memiliki potensi besar untuk
            dikembangkan di bidang ekonomi, pariwisata, dan pemberdayaan masyarakat.
          </p>
          <a href="{{ route('home.potensi')}}"
            class="inline-block px-6 py-3 bg-green-600 hover:bg-green-700 rounded-full font-semibold text-white transition">
            Lihat Potensi
          </a>
        </div>

        {{-- Card Kepala Desa --}}
        <div
          class="bg-white text-gray-800 rounded-xl shadow-lg p-6 w-full max-w-md mt-10 md:mt-0 md:ml-10 transition-transform hover:scale-[1.02]">
          <div class="flex items-center gap-4 mb-4">
            <img src="{{ $villageHead && $villageHead->image ? asset($villageHead->image) : asset('img/download.jpeg') }}"
              alt="Kepala Desa" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-bold">{{ $villageHead->name ?? '-' }}</h3>
              <p class="text-green-600 font-medium">{{ $villageHead->position ?? '-' }}</p>
            </div>
          </div>
          <p class="text-gray-700 mb-4 text-justify">
            {{ $villageHead->welcome_text ?? 'Belum ada sambutan' }}
          </p>
          @if($villageHead && $villageHead->image_signature)
            <img src="{{ asset($villageHead->image_signature) }}" alt="Tanda Tangan" class="mt-4 w-16">
          @endif
        </div>
      </div>
    </div>
  </div>


  {{-- Konten Tambahan --}}
  <div class="max-w-7xl mx-auto px-4 pb-16 space-y-12 text-gray-800">

    {{-- SEJARAH --}}
    <section class="group p-6 border rounded-xl hover:border-green-500 transition duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-4">Sejarah</h3>
      <p class="text-gray-700 leading-relaxed">
        {{ $profiles->sejarah }}
      </p>
    </section>

    {{-- VISI --}}
    <section class="group p-6 border rounded-xl hover:border-green-500 transition duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-4">Visi</h3>
      <p class="text-gray-700 leading-relaxed">
        {{ $profiles->visi }}
      </p>
    </section>

    {{-- MISI --}}
    <section class="group p-6 border rounded-xl hover:border-green-500 transition duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-4">Misi</h3>
      <p class="text-gray-700 leading-relaxed">
        {{ $profiles->misi }}
      </p>
    </section>

    {{-- DAFTAR NAMA KEPALA DESA --}}
    <section class="group p-6 border rounded-xl hover:border-green-500 transition duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-6">Daftar Nama Kepala Desa</h3>
      <ul class="space-y-3">
        @foreach($historys as $head)
          <li class="flex items-start gap-2">
            <span class="text-green-600 text-xl">✔</span>
            <div>
              <p class="font-semibold">{{ $head->name }}</p>
              <small>{{ $head->start_year }} – {{ $head->end_year ?? 'Sekarang' }}</small>
            </div>
          </li>
        @endforeach
      </ul>
    </section>

  </div>

</section>
