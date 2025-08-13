<section class="relative">
  {{-- Header hijau + judul --}}
  <div
   class="relative shadow-md text-white py-16 md:py-20 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold text-center">Potensi Lainya</h2>
    </div>
  </div>

  {{-- Grid kartu, dibuat sedikit “mengambang” dari header --}}
  <div class="max-w-7xl mx-auto px-4 pt-12 pb-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

      @foreach($others as $other)
        <a href="{{ route('home.potensilainya.show', $other->slug) }}" 
            class="group bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-in-out">
            
            {{-- Gambar --}}
            <div class="overflow-hidden">
                <img src="{{ asset('image_other/' . $other->image) }}" alt="{{ $other->farm }}" class="aspect-[16/9] object-cover w-full transition-transform duration-500 group-hover:scale-110">
            </div>
            
            {{-- Konten --}}
            <div class="p-6 flex flex-col">
                <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">
                    {{ $other->farm }}
                </h3>
                <p class="mt-3 text-gray-600 leading-relaxed text-sm">
                    {{ \Illuminate\Support\Str::limit(strip_tags($other->content), 120) }}
                </p>
                <div class="mt-5">
                    <span class="text-green-600 font-semibold text-sm inline-flex items-center group-hover:underline">
                        Lihat Selengkapnya →
                    </span>
                </div>
            </div>
        </a>
      @endforeach

    </div>
  </div>

</section>
