<section class="relative">
  {{-- Header hijau + judul --}}
  <div
      class="relative shadow-md text-white py-16 md:py-20
            bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500">
      <div class="absolute inset-0 bg-[radial-gradient(rgba(255,255,255,0.15)_1px,transparent_1px)] bg-[size:16px_16px]"></div>
      <div class="relative max-w-7xl mx-auto px-4">
        <h2 class="text-3xl md:text-5xl font-extrabold text-center">Info Grafis</h2>
      </div>
  </div>

  <div class="mt-12">
    <h1 class="text-[30px] font-bold mb-8 text-center">Lokasi Desa Tajur Halang</h1>

    <!-- Tambahkan flex dan justify-center -->
    <div class="flex justify-center">
      <div class="w-[1200px] h-[500px] rounded-lg overflow-hidden shadow-lg">
          <iframe 
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31701.755183320067!2d106.7500423569172!3d-6.681641945869611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cef7e1fa3ed9%3A0x45546b9d03841409!2sTajur%20Halang%2C%20Cijeruk%2C%20Bogor%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1754645131888!5m2!1sen!2sid&zoom=16" 
              width="100%" 
              height="100%" 
              style="border:0;" 
              allowfullscreen 
              loading="lazy" 
              referrerpolicy="no-referrer-when-downgrade">
          </iframe>
      </div>
  </div>

</div>


  <div class="max-w-7xl mx-auto px-4 -mt-10 mt-20 pb-12 space-y-12">
    
    {{-- Jumlah Penduduk dan Kepala Keluarga --}}
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-center">
      <div class="border rounded-lg p-4 bg-green-50">
        <p class="text-sm">Total Penduduk</p>
        <p class="text-2xl font-bold text-green-700">{{ optional($infografi)->total_penduduk ?? 0 }} Jiwa</p>
      </div>
      <div class="border rounded-lg p-4">
        <p class="text-sm">Kepala Keluarga</p>
        <p class="text-2xl font-bold text-pink-700">{{ optional($infografi)->kepala_keluarga ?? 0 }} Jiwa</p>
      </div>
      <div class="border rounded-lg p-4">
        <p class="text-sm">Perempuan</p>
        <p class="text-2xl font-bold text-red-700">{{ optional($infografi)->perempuan ?? 0 }} Jiwa</p>
      </div>
      <div class="border rounded-lg p-4">
        <p class="text-sm">Laki-laki</p>
        <p class="text-2xl font-bold text-yellow-700">{{ optional($infografi)->laki_laki ?? 0 }} Jiwa</p>
      </div>
    </div>

    {{-- Berdasarkan Dusun --}}
    @php
      $data_rw = collect(optional($infografi)->rw ?? [])
      ->reject(function($value, $key) {
        return in_array($key, ['new_key', 'new_value']) || $value === 'new_value';
      });

      $max = 5000;
    @endphp


    <div class="space-y-4">
      <h3 class="text-xl font-bold">Berdasar Dusun</h3>
      @foreach ($data_rw as $nama => $jumlah)
          @php
              $persen = $max > 0 ? ($jumlah / $max) * 100 : 0;
          @endphp
          <div>
              <div class="flex justify-between text-sm mb-1">
                  <span>{{ strtoupper($nama) }}</span>
                  <span>{{ $jumlah }} Jiwa</span>
              </div>
              <div class="w-full bg-gray-200 h-3 rounded-full">
                  <div class="bg-green-600 h-3 rounded-full" style="width: {{ $persen }}%"></div>
              </div>
              {{-- Info target max biar orang ngerti --}}
              @if($loop->first)
                  <div class="text-xs text-gray-500">Skala maksimal: {{ number_format($max) }} jiwa</div>
              @endif
          </div>
      @endforeach
    </div>



    {{-- Agama, Pendidikan, Status --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

      {{-- Berdasarkan Agama --}}
      <div class="bg-green-600 text-white rounded-lg p-4">
        <h4 class="text-lg font-semibold mb-2">Berdasarkan Agama</h4>
        <ul class="space-y-1 text-sm">
          <li class="flex justify-between"><span>Islam</span><span>{{ optional($infografi)->agama['islam']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Kristen</span><span>{{ optional($infografi)->agama['kristen']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Hindu</span><span>{{ optional($infografi)->agama['hindu']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Buddha</span><span>{{ optional($infografi)->agama['budha']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Konghucu</span><span>{{ optional($infografi)->agama['konghucu']?? 0 }} Jiwa</span></li>

        </ul>
      </div>

      {{-- Berdasarkan Pendidikan --}}
      <div class="bg-purple-500 text-white rounded-lg p-4">
        <h4 class="text-lg font-semibold mb-2">Berdasarkan Pendidikan</h4>
        <ul class="space-y-1 text-sm">
          <li class="flex justify-between"><span>Belum Sekolah</span><span>{{ optional($infografi)->pendidikan['belum_sekolah']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Tamatan SD</span><span>{{ optional($infografi)->pendidikan['tamat_sd']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Tamatan SMP</span><span>{{ optional($infografi)->pendidikan['tamat_smp']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Tamatan SMA</span><span>{{ optional($infografi)->pendidikan['tamat_sma']?? 0 }} Jiwa</span></li>
          <li class="flex justify-between"><span>Sarjana</span><span>{{ optional($infografi)->pendidikan['sarjana']?? 0 }} Jiwa</span></li>
        </ul>
      </div>

      {{-- Status Perkawinan --}}
      <div class="bg-gray-100 rounded-lg p-4">
        <h4 class="text-lg font-semibold mb-4">Status Pekawinan</h4>
        <ul class="space-y-4 text-sm">
          <li class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <span class="inline-block w-4 h-4 bg-purple-300 rounded-full"></span>
              <span>Belum Kawin</span>
            </div>
            <span class="font-bold">{{ optional($infografi)->status_perkawinan['belum_kawin'] ?? 0 }} Jiwa</span>
          </li>
          <li class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <span class="inline-block w-4 h-4 bg-green-800 rounded-full"></span>
              <span>Kawin</span>
            </div>
            <span class="font-bold">{{ optional($infografi)->status_perkawinan['kawin']?? 0 }} Jiwa</span>
          </li>
          <li class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <span class="inline-block w-4 h-4 bg-pink-400 rounded-full"></span>
              <span>Cerai</span>
            </div>
            <span class="font-bold">{{ optional($infografi)->status_perkawinan['cerai']?? 0 }} Jiwa</span>
          </li>
        </ul>
      </div>

    </div>
  </div>
</section>
