{{-- SECTION: Potensi Desa --}}
<section class="relative">
  {{-- Header hijau + judul --}}
  <div
      class="relative shadow-md text-white py-16 md:py-20
            bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500">
      <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.15)_1px,transparent_1px)] bg-[size:16px_16px]"></div>
      <div class="relative max-w-7xl mx-auto px-4">
        <h2 class="text-3xl md:text-5xl font-extrabold text-center">Gallery</h2>
      </div>
  </div>

  {{-- Grid kartu --}}
  <div class="max-w-7xl mx-auto px-4 -mt-10 mt-20 pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

      {{-- CARD 1 --}}
      @foreach($gallerys as $gallery)
        <div class="bg-white rounded-xl shadow border overflow-hidden hover:shadow-lg hover:scale-105 hover:border-green-400 transition duration-300 ease-in-out group relative">
          <img src="{{ asset($gallery->image) }}"  alt="Kegiatan gotong royong" class="w-full h-64 object-cover">
          <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
              <p class="text-white text-lg font-semibold">{{$gallery->judul}}</p>
          </div>
        </div>
      @endforeach
      
      


      
    
    </div>
  </div>
</section>
