<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HistoryVillageHeadController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PertanianController;
use App\Http\Controllers\PerternakanController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VillageHeadController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\WisataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// FRONT_SITE

Route::prefix('/')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/potensi', 'potensi')->name('home.potensi');
    
    Route::get('/pengumuman', 'pengumuman')->name('home.pengumuman');
    Route::get('/pengumuman/{slug}', 'showPengumuman')->name('home.pengumuman.show'); 

    Route::get('/berita', 'berita')->name('home.berita'); // untuk list berita
    Route::get('/berita/{slug}', 'showBerita')->name('home.berita.show'); 

    Route::get('/layanan', 'layanan')->name('home.layanan');

    Route::get('/profil-desa', 'profiledesa')->name('home.profiledesa');
    Route::get('/infografis', 'infografis')->name('home.infografis');
    Route::get('/bumdes', 'bumdes')->name('home.bumdes');
    Route::get('/gallery', 'gallery')->name('home.gallery');

    Route::get('/perternakan', 'perternakan')->name('home.perternakan');
    Route::get('/perternakan/{slug}', 'showPerternakan')->name('home.perternakan.show');

    Route::get('/pertanian', 'pertanian')->name('home.pertanian');
    Route::get('/umkm', 'umkm')->name('home.umkm');
    Route::get('/wisata', 'wisata')->name('home.wisata');
    Route::get('/potensilainya', 'potensilainya')->name('home.potensilainya');
   

});

Route::get('/logintjh', [AuthController::class, 'showLoginForm'])->name('logintjh');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


//BACK SITE

Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'back_site.dashboard')->name('dashboard');

    Route::resource('news', NewsController::class);
    Route::resource('pengumumans', PengumumanController::class);
    Route::resource('layanans', LayananController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('village_heads', VillageHeadController::class);
    Route::resource('history_heads', HistoryVillageHeadController::class);
    Route::resource('profiles', ProfileController::class);
    Route::resource('gallerys', GalleryController::class);

    Route::resource('perternakans', PerternakanController::class);
    Route::resource('pertanians', PertanianController::class);
    Route::resource('umkms', UmkmController::class);
    Route::resource('wisatas', WisataController::class);
    Route::resource('others', OtherController::class);


});



















