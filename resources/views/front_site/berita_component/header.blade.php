{{-- SECTION: Potensi Desa --}}
<section class="relative">
  {{-- Header hijau + judul --}}
  <div
    class="bg-green-700 text-white py-16 md:py-20
           bg-[radial-gradient(#25633d_1px,transparent_1px)] bg-[size:16px_16px]">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold text-center">Berita</h2>
    </div>
  </div>

  {{-- Grid kartu, dibuat sedikit “mengambang” dari header --}}
  <div class="max-w-7xl mx-auto px-4 -mt-10 mt-20 pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
      @foreach ($news as $item)
        <a href="{{ route('home.berita.show', $item->slug) }}"
          class="bg-white rounded-xl shadow border hover:shadow-lg hover:scale-105 hover:border-green-400 hover:bg-green-50 transition duration-300 ease-in-out mt-8 group overflow-hidden">
          
          {{-- Gambar --}}
          @if ($item->image)
            <img src="{{ asset($item->image) }}" width="100"
                alt="{{ $item->title }}"
                class="w-full aspect-[16/9] object-cover transition-transform duration-300 group-hover:scale-105">
          @endif

          <div class="p-6 flex-1 flex flex-col">
            <h3 class="text-2xl font-extrabold text-gray-900">
              {{ $item->title }}
            </h3>
            <p class="mt-3 text-gray-600 leading-relaxed">
              {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 120) }}
            </p>
            <div class="mt-auto pt-6">
              <h1 class="font-bold text-green-500">Berita</h1>
              <div class="h-1.5 w-24 bg-green-600 rounded-full transition-all duration-300 group-hover:w-32"></div>
            </div>
          </div>
        </a>
      @endforeach
    </div>

  </div>
</section>
