{{-- SECTION: Profile Desa --}}
<section class="relative">
  {{-- Header hijau + judul --}}
  <div class="bg-green-700 text-white py-16 md:py-20 bg-[radial-gradient(#25633d_1px,transparent_1px)] bg-[size:16px_16px]">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold text-center">Profile Desa</h2>
    </div>
  </div>

  {{-- Section Tentang Desa --}}
  <div class="max-w-7xl mx-auto px-4 mt-10">
    <div class="relative rounded-2xl overflow-hidden mb-8">
      <!-- Background image -->
      <img src="{{ asset('img/tanah.jpg')}}" alt="Background Desa" class="w-full h-[300px] md:h-[800px] lg:h-[500px] object-cover">


      <!-- Overlay -->
      <div class="absolute inset-0 bg-black/40"></div>

      <!-- Content wrapper -->
      <div class="absolute inset-0 flex flex-col md:flex-row items-center justify-between p-10 text-white">
        <!-- Keterangan Desa -->
        <div class="max-w-xl">
          <h1 class="text-4xl md:text-5xl font-bold mb-4">Tentang Desa Tajur Halang</h1>
          <p class="text-lg mb-6">LHPD Desa Tukadaya, Kecamatan Melaya, Kabupaten Jembrana, Bali.</p>
          <a href="{{ route('home.potensi')}}" class="inline-block px-6 py-3 bg-green-600 hover:bg-green-700 rounded-full font-semibold text-white transition">
            Lihat Potensi
          </a>
        </div>

        <!-- Card Kepala Desa -->
        <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6 w-full max-w-md mt-10 md:mt-0 md:ml-10">
          <div class="flex items-center gap-4 mb-4">
            <img src="{{ $villageHead && $villageHead->image ? asset($villageHead->image) : asset('img/download.jpeg') }}" alt="Kepala Desa" class="w-16 h-16 rounded-full object-cover">
            <div>
              <h3 class="text-xl font-bold">{{ $villageHead->name ?? '-' }}</h3>
              <p class="text-green-600 font-medium">{{ $villageHead->position ?? '-' }}</p>
            </div>
          </div>
          <p class="text-gray-700 mb-4">
            {{ $villageHead->welcome_text ?? 'Belum ada sambutan' }}
          </p>
          @if($villageHead && $villageHead->image_signature)
            <img src="{{ asset($villageHead->image_signature) }}" alt="Tanda Tangan" class="mt-4 w-16">
          @endif
        </div>
      </div>
    </div>
  </div>

  {{-- Konten Yang di SS DI BAWAH SINI --}}
  {{-- Konten Tambahan --}}
  <div class="max-w-7xl mx-auto px-4 pb-16 space-y-12 text-gray-800">

    {{-- SEJARAH --}}
    <section class="group p-4 border rounded-xl hover:border-green-500 duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-2">Sejarah</h3>
      <p class="text-gray-700 leading-relaxed">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere mattis dolor, ut porttitor nulla sollicitudin quis.
        Quisque placerat cursus ex. Morbi convallis elit sed feugiat molestie. Phasellus ornare augue nec nunc vehicula rhoncus.
        Proin elit massa, pretium et convallis sit amet, venenatis et mauris. Phasellus in augue a tortor dictum fermentum.
        Integer et mollis sem, nec posuere risus. Sed et molestie nulla, vel suscipit libero.
      </p>
      <br>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique eaque voluptas iste sunt, officia rerum, ipsa nesciunt doloribus laborum ea quaerat ab! Dolore adipisci minus quasi recusandae amet! Nesciunt, omnis!</p>
      
    </section>

    {{-- VISI & MISI --}}
    <section class="group p-4 border rounded-xl hover:border-green-500 duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-2">Visi </h3>
      <p class="text-gray-700 leading-relaxed mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere mattis dolor, ut porttitor nulla sollicitudin quis.
        Quisque placerat cursus ex. Morbi convallis elit sed feugiat molestie. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae rem veritatis, molestiae dolorem culpa incidunt eligendi aspernatur error nemo officia recusandae fugit doloribus minus pariatur dolore tenetur maxime neque quaerat? Phasellus ornare augue nec nunc vehicula rhoncus.
      </p>
    </section>
    <section class="group p-4 border rounded-xl hover:border-green-500 duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-2">Misi</h3>
      <p class="text-gray-700 leading-relaxed mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere mattis dolor, ut porttitor nulla sollicitudin quis.
        Quisque placerat cursus ex. Morbi convallis elit sed feugiat molestie. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae rem veritatis, molestiae dolorem culpa incidunt eligendi aspernatur error nemo officia recusandae fugit doloribus minus pariatur dolore tenetur maxime neque quaerat? Phasellus ornare augue nec nunc vehicula rhoncus.
      </p>
    </section>

    {{-- DAFTAR NAMA KEPALA DESA --}}
    <section class="group p-4 border rounded-xl hover:border-green-500 duration-300">
      <h3 class="text-2xl md:text-3xl font-bold mb-2">Daftar Nama Kepala Desa</h3>
      <p class="text-gray-700 leading-relaxed mb-4">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi posuere mattis dolor, ut porttitor nulla sollicitudin quis.
      </p>
      <ul class="space-y-3">
        <li class="flex items-start gap-2">
          <span class="text-green-600 text-xl">✔</span>
          <div>
            <p class="font-semibold">DRS. Made Sing Nawang</p>
            <small>1986 – 2000</small>
          </div>
        </li>
        <li class="flex items-start gap-2">
          <span class="text-green-600 text-xl">✔</span>
          <div>
            <p class="font-semibold">Ketut Lanang Murti</p>
            <small>2000 – 2002</small>
          </div>
        </li>
        <li class="flex items-start gap-2">
          <span class="text-green-600 text-xl">✔</span>
          <div>
            <p class="font-semibold">I Nyoman Lipsuim</p>
            <small>2002 – 2010</small>
          </div>
        </li>
        <li class="flex items-start gap-2">
          <span class="text-green-600 text-xl">✔</span>
          <div>
            <p class="font-semibold">Ketut Bruno F</p>
            <small>2007 – 2013</small>
          </div>
        </li>
        <li class="flex items-start gap-2">
          <span class="text-green-600 text-xl">✔</span>
          <div>
            <p class="font-semibold">I Made Budi Utama</p>
            <small>2010 – Sekarang</small>
          </div>
        </li>
      </ul>
    </section>

  </div>

  
</section>
