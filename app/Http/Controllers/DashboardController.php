<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Pengumuman;
use App\Models\News;
use App\Models\Other;
use App\Models\Pertanian;
use App\Models\Perternakan;
use App\Models\Umkm;
use App\Models\Wisata;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahPengumuman = Pengumuman::count();
        $jumlahBerita = News::count();

        $messages = Message::all();

        $jumlahPerternakan = Perternakan::count();
        $jumlahPertanian = Pertanian::count();
        $jumlahUmkm = Umkm::count();
        $jumlahWisata = Wisata::count();
        $jumlahOther = Other::count();
        
        // Total potensi
        $jumlahPotensi = $jumlahPerternakan + $jumlahPertanian + $jumlahUmkm + $jumlahWisata + $jumlahOther;

        return view('back_site.dashboard', compact(
            'jumlahPengumuman',
            'jumlahBerita',
            'jumlahPotensi',
            'messages',
        ));
    }

}
