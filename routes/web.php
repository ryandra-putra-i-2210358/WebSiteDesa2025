<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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


Route::prefix('/')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::get('/potensi', 'potensi')->name('home.potensi');
    Route::get('/pengumuman', 'pengumuman')->name('home.pengumuman');
    Route::get('/berita', 'berita')->name('home.berita');
    Route::get('/layanan', 'layanan')->name('home.layanan');
    Route::get('/profil-desa', 'profiledesa')->name('home.profiledesa');
    Route::get('/infografis', 'infografis')->name('home.infografis');
    Route::get('/bumdes', 'bumdes')->name('home.bumdes');
    Route::get('/gallery', 'gallery')->name('home.gallery');
    Route::get('/perternakan', 'perternakan')->name('home.perternakan');
    Route::get('/pertanian', 'pertanian')->name('home.pertanian');
    Route::get('/umkm', 'umkm')->name('home.umkm');
    Route::get('/wisata', 'wisata')->name('home.wisata');
    Route::get('/potensilainya', 'potensilainya')->name('home.potensilainya');
});



Route::get('/logintjh', [AuthController::class, 'showLoginForm'])->name('logintjh');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/admin/dashboard', function () { return view('back_site.dashboard'); })->name('admin.dashboard');
});



















