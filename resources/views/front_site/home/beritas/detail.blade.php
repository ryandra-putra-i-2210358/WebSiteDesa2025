@extends('front_site.layout.app_front')

@section('title', 'Berita')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')
    <section class="relative">
        {{-- Header judul --}}
        <div class="bg-green-700 text-white py-16 md:py-20
                    bg-[radial-gradient(#25633d_1px,transparent_1px)] bg-[size:16px_16px]">
            <div class="max-w-4xl mx-auto px-4 text-center">
                <h1 class="text-3xl md:text-5xl font-extrabold">{{ $new->title }}</h1>
            </div>
        </div>

        {{-- Konten berita --}}
        <div class="max-w-4xl mx-auto px-4 py-12">
            {{-- Gambar utama --}}
            @if ($new->image)
                <img src="{{ asset($new->image) }}" width="100" alt="{{ $new->title }}" class="w-full rounded-xl shadow mb-8 object-cover aspect-[16/9]">
            @endif


            {{-- Isi berita --}}
            <div class="prose prose-green max-w-3xl mx-auto md:prose-lg leading-relaxed break-words">
                {!! $new->content !!}
            </div>

            {{-- Tombol kembali --}}
            <div class="mt-12">
                <a href="{{ route('home.berita') }}"
                   class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 transition">
                    ← Kembali ke daftar berita
                </a>
            </div>
        </div>
    </section>
@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection
