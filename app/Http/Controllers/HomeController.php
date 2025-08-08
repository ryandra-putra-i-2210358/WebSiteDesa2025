<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\News;
use App\Models\Pengumuman;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $news = News::latest()->paginate(5);
        $sliders = Slider::all();
        return view('front_site.home.index', compact('news', 'sliders'));
    }
    public function potensi(){
        return view('front_site.home.potensi');
    }
    public function pengumuman(){
        $pengumumans = Pengumuman::all();
        return view('front_site.home.pengumuman', compact('pengumumans'));
    }
    public function showPengumuman($slug){
        $pengumuman = Pengumuman::where('slug', $slug)->firstOrFail();
        $latestPosts = Pengumuman::where('id', '!=', $pengumuman->id)->latest()->take(5)->get(); 
        return view('front_site.home.pengumumans.detail', compact('pengumuman', 'latestPosts'));
    }
    public function berita()
    {
        $news = News::all(); // tidak perlu with('image') jika image berupa string
        return view('front_site.home.berita', compact('news'));
    }
    public function showBerita($slug)
    {
        $new = News::where('slug', $slug)->firstOrFail(); 
        $latestPosts = News::where('id', '!=', $new->id)->latest()->take(5)->get(); // <- Wajib get() agar hasilnya Collection, bukan boolean
        return view('front_site.home.beritas.detail', compact('new', 'latestPosts'));
    }
    
    public function layanan(){
        $layanans = Layanan::all();
        
        return view('front_site.home.layanan',compact('layanans'));
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
