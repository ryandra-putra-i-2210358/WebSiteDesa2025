{{-- SECTION: Potensi Desa --}}
<section class="relative">
  {{-- Header hijau + judul --}}
  <div
    class="bg-green-700 text-white py-16 md:py-20
           bg-[radial-gradient(#25633d_1px,transparent_1px)] bg-[size:16px_16px]">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl md:text-5xl font-extrabold text-center">Info Grafis</h2>
    </div>
  </div>

  {{-- Grid kartu, dibuat sedikit “mengambang” dari header --}}
  <div class="max-w-7xl mx-auto px-4 -mt-10 mt-20 pb-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

      {{-- Tambahkan disni fitur yang saya screen shot--}}
      <!-- Kartu Jumlah Penduduk -->
      <div class="col-span-1 md:col-span-2 space-y-4">
        <p class="text-gray-600">
          Lorem ipsum dolor sit ame Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic itaque nisi harum tenetur! Magnam iure porro ut neque, ducimus odit asperiores voluptatem dolor blanditiis veniam beatae qui, vero dolorem atque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam eius, dolores sunt sint quaerat libero, provident commodi voluptatibus minima magnam, temporibus laborum iusto quidem ipsam expedita fugit. Corporis, possimus eius.t, consectetur adipiscing elit. Vestibulum in consectetur sem, ut convallis arcu.
        </p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div class="border rounded-xl p-4 text-center">
            <img src="https://img.icons8.com/emoji/48/000000/world-map.png" class="mx-auto mb-2" />
            <p class="text-sm text-gray-500">Total Penduduk</p>
            <h4 class="text-xl font-bold text-green-700">1.135 Jiwa</h4>
          </div>
          <div class="border rounded-xl p-4 text-center">
            <img src="https://img.icons8.com/emoji/48/000000/family-emoji.png" class="mx-auto mb-2" />
            <p class="text-sm text-gray-500">Kepala Keluarga</p>
            <h4 class="text-xl font-bold">135 Jiwa</h4>
          </div>
          <div class="border rounded-xl p-4 text-center">
            <img src="https://img.icons8.com/emoji/48/000000/woman.png" class="mx-auto mb-2" />
            <p class="text-sm text-gray-500">Perempuan</p>
            <h4 class="text-xl font-bold">1035 Jiwa</h4>
          </div>
          <div class="border rounded-xl p-4 text-center">
            <img src="https://img.icons8.com/emoji/48/000000/man.png" class="mx-auto mb-2" />
            <p class="text-sm text-gray-500">Laki-Laki</p>
            <h4 class="text-xl font-bold">35 Jiwa</h4>
          </div>
        </div>
      </div>

      <!-- Berdasar Dusun -->
      <div class="col-span-1">
        <h4 class="font-bold mb-4">Berdasar Dusun</h4>
        <div class="space-y-4">
          <div>
            <div class="flex justify-between text-sm font-medium">
              <span>Pk Jajang</span><span>1000 Jiwa</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div class="bg-green-600 h-2 rounded-full" style="width: 70%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between text-sm font-medium">
              <span>Dusun Berawan Tangi</span><span>2000 Jiwa</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
            </div>
          </div>
          <div>
            <div class="flex justify-between text-sm font-medium">
              <span>Dusun Baler Bale Agung</span><span>2000 Jiwa</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2">
              <div class="bg-gray-700 h-2 rounded-full" style="width: 30%"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Berdasarkan Agama -->
      <div class="bg-green-600 text-white rounded-xl p-4 space-y-1">
        <h4 class="font-bold text-lg mb-2">Berdasarkan Agama</h4>
        <p class="flex justify-between"><span>Islam</span><span>1300</span></p>
        <p class="flex justify-between"><span>Hindu</span><span>300</span></p>
        <p class="flex justify-between"><span>Buddha</span><span>10</span></p>
        <p class="flex justify-between"><span>Konghucu</span><span>0</span></p>
        <p class="flex justify-between"><span>Kristen</span><span>5</span></p>
      </div>

      <!-- Berdasarkan Pendidikan -->
      <div class="bg-purple-500 text-white rounded-xl p-4 space-y-1">
        <h4 class="font-bold text-lg mb-2">Berdasarkan Pendidikan</h4>
        <p class="flex justify-between"><span>Belum Sekolah</span><span>1300</span></p>
        <p class="flex justify-between"><span>Tamatan SD</span><span>300</span></p>
        <p class="flex justify-between"><span>Tamatan SMP</span><span>10</span></p>
        <p class="flex justify-between"><span>Tamanan SMA</span><span>0</span></p>
        <p class="flex justify-between"><span>Sarjana</span><span>5</span></p>
      </div>

      <!-- Status Perkawinan -->
      <div class="bg-gray-100 rounded-xl p-4 space-y-3">
        <h4 class="font-bold text-lg mb-2">Status Pekawinan</h4>
        <div class="flex items-center gap-3">
          <div class="w-4 h-4 bg-purple-400 rounded-full"></div>
          <p class="text-sm font-medium">Belum Kawin <span class="font-bold">1035 Jiwa</span></p>
        </div>
        <div class="flex items-center gap-3">
          <div class="w-4 h-4 bg-green-800 rounded-full"></div>
          <p class="text-sm font-medium">Kawin <span class="font-bold">750 Jiwa</span></p>
        </div>
        <div class="flex items-center gap-3">
          <div class="w-4 h-4 bg-purple-300 rounded-full"></div>
          <p class="text-sm font-medium">Cerai <span class="font-bold">35 Jiwa</span></p>
        </div>
      </div>


    </div>
  </div>
</section>
