@extends('front_site.layout.app_front')

@section('title', 'Berita')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')
<section class="relative">
    {{-- Header judul --}}
    <div class="relative shadow-md text-white py-16 md:py-20 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold">{{ $new->title }}</h1>
        </div>
    </div>

    {{-- Konten utama dengan sidebar --}}
    <div class="max-w-6xl mx-auto px-4 py-12 grid grid-cols-1 lg:grid-cols-3 gap-10">
        {{-- Kolom Utama --}}
        <div class="lg:col-span-2">
            {{-- Gambar utama --}}
            @if ($new->image)
                <img src="{{ asset($new->image) }}" alt="{{ $new->title }}" class="w-full rounded-xl shadow mb-8 object-cover aspect-[16/9]">
            @endif

            {{-- Isi berita --}}
            @php
             // Ambil semua baris dari konten
                $lines = preg_split('/\r\n|\r|\n/', trim($new->content));

                // Potong menjadi kelompok 5 baris per paragraf
                $paragraphs = array_chunk($lines, 5);
            @endphp

            <div class="prose prose-green max-w-none md:prose-lg leading-relaxed break-words text-justify space-y-6">
                @foreach ($paragraphs as $para)
                    <p>{{ implode(' ', $para) }}</p>
                @endforeach
            </div>

            
            {{-- Tombol kembali --}}
            <div class="mt-12">
                <a href="{{ route('home.berita') }}"
                   class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
                    ← Kembali ke daftar Berita
                </a>
            </div>
        </div>

        {{-- Sidebar --}}
        <aside>
            <div class="group p-4 border rounded-xl transition transform hover:-translate-y-1 hover:scale-105 hover:shadow-lg hover:border-green-500 duration-300">
                <h2 class="text-lg font-semibold mb-4 text-gray-800">Latest Post</h2>
                <ul class="space-y-4">
                    @foreach($latestPosts as $post)
                        <li class="flex items-start space-x-3">
                            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="w-14 h-14 object-cover rounded-md">
                            <div>
                                <p class="text-sm text-gray-500">
                                    {{ optional($post->published_at ?? $post->tanggal)->format('d M Y') }}
                                </p>
                                <a href="{{ route('home.berita.show', $post->slug) }}" class="text-sm font-medium text-gray-800 hover:text-green-600 line-clamp-2">
                                    {{ $post->title }}
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Optional: Ads or Banner --}}
            <div class="mt-8 space-y-4">
                <h1 class="text-lg font-semibold mb-4 text-gray-800">Di Tulis Oleh : {{$new->penulis}}</h1>
                <p class="text-sm mt-5 text-gray-600">{{ optional($new->published_at ?? $new->tanggal)->format('d M Y') }}</p>
            </div>
           
        </aside>
    </div>
</section>
@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection
