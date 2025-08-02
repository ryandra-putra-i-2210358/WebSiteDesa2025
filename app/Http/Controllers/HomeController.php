<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function potensi(){
        return view('home.potensi');
    }
    public function pengumuman(){
        return view('home.pengumuman');
    }
    public function berita(){
        return view('home.berita');
    }
    public function layanan(){
        return view('home.layanan');
    }
    public function profiledesa(){
        return view('home.profiledesa');
    }
    public function infografis(){
        return view('home.infografis');
    }
    public function bumdes(){
        return view('home.bumdes');
    }
    public function gallery(){
        return view('home.gallery');
    }
}
