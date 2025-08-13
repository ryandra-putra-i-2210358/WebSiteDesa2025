@extends('front_site.layout.app_front')

@section('title', 'Detail Potensi')

@section('navbar')
    @include('front_site.component.navbar')
@endsection

@section('content')

    <section class="relative">
    {{-- Header --}}
    <div class="relative text-white py-16 md:py-20 bg-gradient-to-r from-blue-600 via-teal-500 to-emerald-500 shadow-lg">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h1 class="text-3xl md:text-5xl font-extrabold tracking-wide">{{ $other->farm }}</h1>
        </div>
    </div>

    {{-- Konten --}}
    <div class="container mx-auto py-10 px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden border border-gray-100">
            
            {{-- Gambar Utama --}}
            <div class="overflow-hidden">
                <img src="{{ asset('image_other/' . $other->image) }}" 
                     alt="{{ $other->farm }}" 
                     class="w-full h-96 object-cover hover:scale-105 transition-transform duration-500 ease-in-out">
            </div>
    
            {{-- Detail --}}
            <div class="p-8 space-y-6">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">{{ $other->farm }}</h1>
                    <p class="mt-2 text-gray-500">Informasi lengkap mengenai potensi lainya di Desa Tajur Halang</p>
                </div>

                {{-- Info Peternakan --}}
                <div class="grid md:grid-cols-2 gap-4 text-gray-700">
                    <p><strong>Jenis Potensi:</strong> {{ $other->jenis_other }}</p>
                    <p><strong>Jumlah Potensi:</strong> {{ $other->jumlah_other }}</p>
                    <p><strong>Pemilik:</strong> {{ $other->pemilik }}</p>
                    <p><strong>Lokasi:</strong> {{ $other->alamat }}</p>
                    <p><strong>No. HP:</strong> {{ $other->nohp }}</p>
                </div>
    
                {{-- Konten Deskripsi --}}
                @php
                    $lines = preg_split('/\r\n|\r|\n/', trim($other->content));
                    $paragraphs = array_chunk($lines, 5);
                @endphp
    
                <div class="prose max-w-none leading-relaxed text-gray-700 text-justify space-y-4">
                    @foreach ($paragraphs as $para)
                        <p>{{ implode(' ', $para) }}</p>
                    @endforeach
                </div>
    
                {{-- Tombol Kembali --}}
                <div class="pt-6">
                    <a href="{{ route('home.potensi') }}" 
                       class="inline-flex items-center gap-2 bg-green-600 text-white px-5 py-2 rounded-lg shadow hover:bg-green-700 transition-colors">
                        <span>&larr;</span> Kembali ke Daftar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('footer')
    @include('front_site.component.footer')
@endsection
