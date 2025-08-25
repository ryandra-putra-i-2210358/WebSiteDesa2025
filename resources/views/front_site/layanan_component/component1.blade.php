<div class="max-w-6xl mx-auto px-4 py-1 mt-[-30px] mb-20">
  <!-- Gambar & Deskripsi -->
  <div class="mb-8">
    <img src="{{ asset('img/ppdesa.JPG') }}" alt="Lembaga Perkreditan Desa" class="rounded-xl shadow-md w-full h-[600px] object-cover mb-10" />
    <p class="mt-6 text-justify text-gray-700 leading-relaxed">
      Pelayanan desa mengacu pada berbagai layanan yang disediakan oleh pemerintah desa kepada penduduk dan masyarakat di wilayah desa. Tujuan utama dari pelayanan desa adalah untuk meningkatkan kesejahteraan masyarakat, memfasilitasi pembangunan di tingkat desa, dan memenuhi kebutuhan dasar penduduk desa. Pelayanan desa mencakup berbagai aspek, seperti pelayanan administratif, sosial, kesehatan, pendidikan, infrastruktur, dan lain-lain. Berikut adalah beberapa contoh pelayanan desa yang umum:
    </p>
  </div>

  <!-- Grid Card -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6">
  <!-- Card 1 -->

    @foreach($layanans as $layanan)
    
      <div class="bg-white rounded-xl shadow border border-green-200 p-5 hover:shadow-lg hover:scale-105 hover:border-green-400 hover:bg-green-50 transition duration-300 ease-in-out">
          <h3 class="font-semibold text-gray-800 mb-3">{{ $layanan->judul }}</h3>
          <ul class="list-disc pl-5 space-y-2 text-gray-600 leading-relaxed text-justify">
              @foreach($layanan->items as $item)
                  <li>{{ $item }}</li>
              @endforeach
          </ul>
      </div>
          
    @endforeach
    
  </div>
</div>
