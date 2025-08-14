<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\HistoryVillageHead;
use App\Models\InfoGrafi;
use App\Models\Layanan;
use App\Models\News;
use App\Models\Other;
use App\Models\Pengumuman;
use App\Models\Pertanian;
use App\Models\Perternakan;
use App\Models\Profile;
use App\Models\Slider;
use App\Models\Umkm;
use App\Models\VillageHead;
use App\Models\Wisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $news = News::latest()->paginate(5);
        $villageHead = VillageHead::first();
        $sliders = Slider::all();
        return view('front_site.home.index', compact('news', 'sliders', 'villageHead'));
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
        
        $villageHead = VillageHead::first();
        $profiles = Profile::first();
        $historys = HistoryVillageHead::all();

        return view('front_site.home.profiledesa', compact('villageHead', 'historys', 'profiles'));
    }
    public function infografis(){
        $infografi = InfoGrafi::first();
        return view('front_site.home.infografis', compact('infografi'));
    }
    public function bumdes(){
        return view('front_site.home.bumdes');
    }
    public function gallery(){
        $gallerys = Gallery::all();

        return view('front_site.home.gallery', compact('gallerys'));
    }
    // POTENSI DESA
    public function perternakan(){
        $perternakans = Perternakan::all();
        return view('front_site.home.perternakan', compact('perternakans'));
    }

    public function showPerternakan($slug){
        $perternakan = Perternakan::where('slug', $slug)->firstOrFail();
        return view('front_site.home.perternakans.detail', compact('perternakan'));
    }

    public function pertanian(){
        $pertanians = Pertanian::all();
        return view('front_site.home.pertanian', compact('pertanians'));
    }

    public function showPertanian($slug){
        $pertanian = Pertanian::where('slug', $slug)->firstOrFail();
        return view('front_site.home.pertanians.detail', compact('pertanian'));
    }

    public function umkm(){
        $umkms = Umkm::all();
        return view('front_site.home.umkm', compact('umkms'));
    }
    public function showUmkm($slug){
        $umkm = Umkm::where('slug', $slug)->firstOrFail();
        return view('front_site.home.umkms.detail', compact('umkm'));
    }

    public function wisata(){
        $wisatas = Wisata::all();
        return view('front_site.home.wisata', compact('wisatas'));
    }
    public function showWisata($slug){
        $wisata = Wisata::where('slug', $slug)->firstOrFail();
        return view('front_site.home.wisatas.detail', compact('wisata'));
    }

    public function potensilainya(){
        $others = Other::all();
        return view('front_site.home.potensilainya', compact('others'));
    }

    public function showOther($slug){
        $other = Other::where('slug', $slug)->firstOrFail();
        return view('front_site.home.potensilainyas.detail', compact('other'));
    }

    
}
