<div class="min-h-screen bg-gradient-to-b from-blue-50 via-emerald-50 to-white">
  <!-- Hero -->
  <header class="relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 opacity-90"></div>
    <svg class="absolute -top-10 -right-10 w-64 h-64 opacity-20" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
      <path fill="#FFFFFF" d="M43.5,-64.6C55.3,-56.3,63.1,-44.2,70.4,-30.8C77.6,-17.4,84.2,-2.6,83.5,11.3C82.8,25.2,74.6,38.2,64.1,49.6C53.6,61,40.7,70.8,26.2,75.4C11.8,80.1,-4.1,79.6,-19.1,75.1C-34.1,70.6,-48.2,62,-59.2,50.1C-70.2,38.1,-78.1,22.8,-80.4,6.2C-82.7,-10.4,-79.3,-28.3,-69.7,-42.2C-60.1,-56.1,-44.3,-66,-28.4,-72.4C-12.6,-78.8,3.4,-81.7,18.2,-77.6C33.1,-73.5,46.7,-62.9,43.5,-64.6Z" transform="translate(100 100)" />
    </svg>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 text-center text-white">
      {{-- <p class="uppercase tracking-widest text-emerald-200 text-xs sm:text-sm">Hubungi Kami</p> --}}
      <h1 class="mt-2 text-3xl sm:text-4xl md:text-5xl font-extrabold">Kontak Desa Tajur Halang</h1>
      <p class="mt-3 max-w-2xl mx-auto text-white/90">Ada pertanyaan, saran, atau keperluan layanan? Kirimkan pesan Anda melalui formulir di bawah ini atau gunakan kontak resmi desa.</p>
    </div>
  </header>

  <!-- Flash Messages -->
  <div class="max-w-3xl mx-auto px-4 mt-6">
    @if(session('success'))
      <div class="rounded-2xl border border-emerald-200 bg-emerald-50 text-emerald-800 px-4 py-3">{{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div class="rounded-2xl border border-red-200 bg-red-50 text-red-800 px-4 py-3">{{ session('error') }}</div>
    @endif
  </div>

  <!-- Content -->
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Form -->
      <section class="lg:col-span-2">
        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-black/5 p-6 sm:p-8">
          <h2 class="text-xl font-semibold text-gray-900">Kirim Pesan</h2>
          {{-- <p class="mt-1 text-sm text-gray-600">Isi formulir berikut. Kami akan membalas secepatnya pada jam kerja.</p> --}}

          <form id="messageForm" action="{{ route('messages.store') }}" method="POST" class="mt-6 space-y-5" novalidate>
            @csrf

            <!-- Honey Pot (anti-bot) -->
            <div class="hidden">
              <label for="website">Website</label>
              <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                  class="mt-1 block w-full  border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                @error('name')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email Aktif <span class="text-red-500">*</span></label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required
                  class="mt-1 block w-full  border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                @error('email')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label for="phone" class="block text-sm font-medium text-gray-700">No.HP</label>
                <input type="tel" name="phone" id="phone" value="{{ old('phone') }}"
                  class="mt-1 block w-full  border-gray-300 shadow-sm focus:border-emerald-500 focus:ring-emerald-500" placeholder="08xxxxxxxxxx">
                @error('phone')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
              <div>
                <label for="subject" class="block text-sm font-medium text-gray-700">Subjek <span class="text-red-500">*</span></label>
                <input type="text" name="subject" id="subject" value="{{ old('subject') }}" required
                  class="mt-1 block w-full  border-gray-300 shadow-sm focus:border-teal-500 focus:ring-teal-500">
                @error('subject')
                  <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
              </div>
            </div>

            <div>
              <label for="message" class="block text-sm font-medium text-gray-700">Pesan <span class="text-red-500">*</span></label>
              <textarea name="message" id="message" rows="6" required
                class="mt-1 block w-full  border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" placeholder="Tulis pesan Anda di sini...">{{ old('message') }}</textarea>
              @error('message')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>

            {{-- reCAPTCHA / hCaptcha placeholder (opsional) --}}
            {{-- <div class="pt-2">{!! NoCaptcha::renderJs() !!} {!! NoCaptcha::display() !!}</div> --}}

            <div class="pt-2 flex items-center gap-3">
              <button type="submit"
                class="inline-flex items-center justify-center rounded-2xl px-5 py-3 text-sm font-semibold text-white shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 hover:from-blue-700 hover:via-teal-600 hover:to-emerald-600">
                Kirim Pesan
              </button>
              
            </div>
          </form>
        </div>
      </section>

      <!-- Info -->
      <aside class="lg:col-span-1 space-y-8">
        {{-- <div class="bg-white  shadow-sm ring-1 ring-black/5 p-6 sm:p-7">
          <h3 class="text-lg font-semibold text-gray-900">Kontak Resmi</h3>
          <dl class="mt-4 space-y-3 text-sm text-gray-700">
            <div class="flex gap-3">
              <dt class="shrink-0 w-24 text-gray-500">Alamat</dt>
              <dd>Jl. Raya Desa Tajur Halang No. 1, Tajur Halang, Kabupaten Bogor, Jawa Barat 16320</dd>
            </div>
            <div class="flex gap-3">
              <dt class="shrink-0 w-24 text-gray-500">Telepon</dt>
              <dd>
                <a href="tel:+622112345678" class="underline decoration-teal-400 decoration-2 underline-offset-4 hover:text-teal-600">(021) 123 456 78</a>
              </dd>
            </div>
            <div class="flex gap-3">
              <dt class="shrink-0 w-24 text-gray-500">WhatsApp</dt>
              <dd>
                <a href="https://wa.me/6281234567890" class="underline decoration-emerald-400 decoration-2 underline-offset-4 hover:text-emerald-600" target="_blank" rel="noopener">+62 812-3456-7890</a>
              </dd>
            </div>
            <div class="flex gap-3">
              <dt class="shrink-0 w-24 text-gray-500">Email</dt>
              <dd>
                <a href="mailto:desatajuhalang@example.go.id" class="underline decoration-blue-400 decoration-2 underline-offset-4 hover:text-blue-600">desatajuhalang@example.go.id</a>
              </dd>
            </div>
            <div class="flex gap-3">
              <dt class="shrink-0 w-24 text-gray-500">Jam Layanan</dt>
              <dd>Senin–Jumat 08.00–15.00 WIB, Sabtu 08.00–12.00 WIB</dd>
            </div>
          </dl> --}}

          {{-- <div class="mt-5 flex items-center gap-3 text-sm">
            <a href="#" class="inline-flex items-center px-3 py-2 rounded-xl bg-blue-50 text-blue-700 ring-1 ring-blue-200 hover:bg-blue-100">Facebook</a>
            <a href="#" class="inline-flex items-center px-3 py-2 rounded-xl bg-emerald-50 text-emerald-700 ring-1 ring-emerald-200 hover:bg-emerald-100">Instagram</a>
            <a href="#" class="inline-flex items-center px-3 py-2 rounded-xl bg-teal-50 text-teal-700 ring-1 ring-teal-200 hover:bg-teal-100">Twitter</a>
          </div> --}}
        {{-- </div> --}}

        <div class="bg-white rounded-2xl shadow-sm ring-1 ring-black/5 overflow-hidden">
          <!-- Header -->
          <div class="p-6 sm:p-7">
            <h3 class="text-lg font-semibold text-gray-900">Lokasi di Peta</h3>
            <p class="mt-1 text-sm text-gray-600">Balai Desa Tajur Halang</p>
          </div>

          <!-- Map -->
          <div class="aspect-[4/3] w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28009.579538565144!2d106.75399649986971!3d-6.683500403856925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69cef7e1fa3ed9%3A0x45546b9d03841409!2sTajur%20Halang%2C%20Cijeruk%2C%20Bogor%20Regency%2C%20West%20Java!5e0!3m2!1sen!2sid!4v1755093651684!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <!-- Footer note -->
          <div class="p-4 text-xs text-gray-500">
            Jika peta tidak tampil, alamat: Jl. Raya Desa Tajur Halang No. 1, Kab. Bogor, Jawa Barat 16320
          </div>
        </div>

      </aside>
    </div>
  </main>

  <!-- CTA Banner -->
  <section class="mt-6 mb-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 p-6 sm:p-8 text-white">
        <div class="max-w-3xl">
          <h3 class="text-xl sm:text-2xl font-semibold">Butuh bantuan cepat?</h3>
          <p class="mt-1 text-white/90">Silakan hubungi WhatsApp admin pada jam kerja untuk respon lebih cepat.</p>
        </div>
        <div class="mt-4">
          <a href="https://wa.me/6285718286482" target="_blank" rel="noopener"
             class="inline-flex items-center justify-center rounded-2xl bg-white/10 backdrop-blur px-5 py-3 text-sm font-semibold ring-1 ring-white/30 hover:bg-white/20">
            Chat WhatsApp Admin
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer note -->
  {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <p class="text-xs text-gray-500">Form ini dilindungi oleh kebijakan privasi dan tata kelola data Pemerintah Desa Tajur Halang.</p>
  </div> --}}
</div>

<script>
  document.getElementById("messageForm").addEventListener("submit", function(e) {
    e.preventDefault(); // hentikan submit default

    Swal.fire({
      title: "Apakah Anda yakin?",
      text: "Pesan ini akan dikirim ke admin.",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Ya, Kirim!"
    }).then((result) => {
      if (result.isConfirmed) {
        e.target.submit(); // submit form kalau user pilih "Ya"
      }
    });
  });
</script>
