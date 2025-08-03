<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front_site.home.index');
    }
    public function potensi(){
        return view('front_site.home.potensi');
    }
    public function pengumuman(){
        return view('front_site.home.pengumuman');
    }
    public function berita(){
        return view('front_site.home.berita');
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
