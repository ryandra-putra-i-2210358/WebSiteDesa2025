<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $news = News::latest()->paginate(5);
        return view('front_site.home.index', compact('news'));
    }
    public function potensi(){
        return view('front_site.home.potensi');
    }
    public function pengumuman(){
        return view('front_site.home.pengumuman');
    }
    public function berita()
    {
        $news = News::all(); // tidak perlu with('image') jika image berupa string
        return view('front_site.home.berita', compact('news'));
    }
    public function showBerita($slug)
    {
        // Ambil berita utama berdasarkan slug
        $new = News::where('slug', $slug)->firstOrFail();

        // Ambil berita lain sebagai "Latest Posts", kecuali yang sedang dibuka
        $latestPosts = News::where('id', '!=', $new->id)
                            ->latest()
                            ->take(5)
                            ->get(); // <- Wajib get() agar hasilnya Collection, bukan boolean

        // Kirim ke view
        return view('front_site.home.beritas.detail', compact('new', 'latestPosts'));
    }
        public function layanan(){
        return view('front_site.home.layanan');
    }
    public function profiledesa(){
        return view('front_site.home.profiledesa');
    }
    public function infografis(){
        return view('front_site.home.infografis');
    }
    public function bumdes(){
        return view('front_site.home.bumdes');
    }
    public function gallery(){
        return view('front_site.home.gallery');
    }
    // POTENSI DESA
    public function perternakan(){
        return view('front_site.home.perternakan');
    }
    public function pertanian(){
        return view('front_site.home.pertanian');
    }
    public function umkm(){
        return view('front_site.home.umkm');
    }
    public function wisata(){
        return view('front_site.home.wisata');
    }
    public function potensilainya(){
        return view('front_site.home.potensilainya');
    }

    
}
