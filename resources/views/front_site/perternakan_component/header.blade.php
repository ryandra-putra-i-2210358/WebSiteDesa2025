<section class="relative">
    {{-- Header hijau + judul --}}
    <div class="relative text-white py-16 md:py-20 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-5xl font-extrabold">Peternakan</h2>
        </div>
    </div>

    {{-- Grid kartu --}}
    <div class="max-w-7xl mx-auto px-4 pt-12 pb-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($perternakans as $perternakan)
                <a href="{{ route('home.perternakan.show', $perternakan->slug) }}" 
                   class="group bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 ease-in-out">
                    
                    {{-- Gambar --}}
                    <div class="overflow-hidden">
                        <img src="{{ asset('image_perternakan/' . $perternakan->image) }}" alt="{{ $perternakan->farm }}" class="aspect-[16/9] object-cover w-full transition-transform duration-500 group-hover:scale-110">
                    </div>
                    
                    {{-- Konten --}}
                    <div class="p-6 flex flex-col">
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-green-600 transition-colors">
                            {{ $perternakan->farm }}
                        </h3>
                        <p class="mt-3 text-gray-600 leading-relaxed text-sm">
                            {{ \Illuminate\Support\Str::limit(strip_tags($perternakan->content), 120) }}
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
