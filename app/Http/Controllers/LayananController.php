<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Menampilkan daftar semua layanan.
     */
    public function index()
    {
        $layanans = Layanan::latest()->get();
        return view('back_site.layanans.index', compact('layanans'));
    }

    /**
     * Menampilkan form tambah layanan.
     */
    public function create()
    {
        return view('back_site.layanans.create');
    }

    /**
     * Menyimpan layanan baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'items' => 'required|array|min:1',
            'items.*' => 'required|string|max:255',
        ]);

        Layanan::create([
            'judul' => $request->judul,
            'items' => $request->items,
        ]);

        return redirect()->route('admin.layanans.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu layanan.
     */
    public function show(Layanan $layanan)
    {
        return view('back_site.layanans.show', compact('layanan'));
    }

    /**
     * Menampilkan form edit layanan.
     */
    public function edit(Layanan $layanan)
    {
        return view('back_site.layanans.edit', compact('layanan'));
    }

    /**
     * Mengupdate data layanan di database.
     */
    public function update(Request $request, Layanan $layanan)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'items' => 'required|array|min:1',
            'items.*' => 'required|string|max:255',
        ]);

        $layanan->update([
            'judul' => $request->judul,
            'items' => $request->items,
        ]);

        return redirect()->route('admin.layanans.index', $layanan->id)->with('success', 'Layanan berhasil diperbarui.');
    }

    /**
     * Menghapus layanan dari database.
     */
    public function destroy(Layanan $layanan)
    {
        $layanan->delete();
        return redirect()->route('admin.layanans.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
