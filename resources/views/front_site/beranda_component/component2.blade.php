<section class="px-8 py-16 bg-white mt-10">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center gap-10">
    
    <!-- Kiri: Konten Teks -->
    <div class="md:w-1/2">
      <p class="text-green-600 font-semibold tracking-widest uppercase mb-2">Selamat Datang Di</p>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Desa Tajur Halang</h2>
      
      <p class="text-gray-700 mb-4">
        Desa Tajur Halang adalah sebuah desa yang kaya akan budaya, gotong royong, serta keindahan alamnya. 
        Kami berkomitmen untuk terus membangun desa yang maju, sejahtera, dan harmonis bagi seluruh warganya.
      </p>
      
      <p class="text-gray-700 leading-relaxed text-justify mb-10">
        Melalui website ini, kami hadir untuk memberikan informasi yang lebih mudah diakses oleh masyarakat, 
        baik warga desa maupun para pengunjung. Semoga kehadiran website ini dapat menjadi jembatan komunikasi 
        yang bermanfaat serta membawa Desa Tajur Halang semakin dikenal luas.
      </p>
      
      <a href="{{ route('home.profiledesa')}}" 
        class="inline-block bg-green-600 hover:bg-green-700 text-white font-semibold px-6 py-3 rounded-full shadow-md transition duration-300">
        Lihat Profil Desa
      </a>
    </div>


    <!-- Kanan: Gambar -->
    <div class="md:w-1/2">
      <img src="{{ asset('img/test2.jpg') }}" alt="Desa Tajur Halang" class="rounded-2xl shadow-lg w-full object-cover">
    </div>

  </div>
</section>
