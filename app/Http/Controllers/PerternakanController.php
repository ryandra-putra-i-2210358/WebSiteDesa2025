<?php

namespace App\Http\Controllers;

use App\Models\Perternakan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PerternakanController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $perternakans = Perternakan::latest()->get();
        return view('back_site.perternakans.index', compact('perternakans'));
    }

    // Form tambah
    public function create()
    {
        return view('back_site.perternakans.create');
    }

    // Simpan data
    public function store(Request $request)
    {
        $request->validate([
            'farm' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'jenis_ternak' => 'required|string|max:100',
            'jumlah_ternak' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable',
        ]);

        // Slug unik
        $slug = Str::slug($request->farm);
        $count = Perternakan::where('slug', 'like', $slug . '%')->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        // Upload gambar
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image_peternakan'), $imageName);
        }

        Perternakan::create([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_ternak' => $request->jenis_ternak,
            'jumlah_ternak' => $request->jumlah_ternak,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.perternakans.index')->with('success', 'Data berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $perternakan = Perternakan::findOrFail($id);
        return view('back_site.perternakans.edit', compact('perternakan'));
    }
    public function show($id)
    {
        $perternakan = Perternakan::findOrFail($id);
        return view('back_site.perternakans.show', compact('perternakan'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $perternakan = Perternakan::findOrFail($id);

        $request->validate([
            'farm' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'jenis_ternak' => 'required|string|max:100',
            'jumlah_ternak' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable',
        ]);

        // Slug unik kalau farm berubah
        $slug = $perternakan->slug;
        if ($request->farm != $perternakan->farm) {
            $slug = Str::slug($request->farm);
            $count = Perternakan::where('slug', 'like', $slug . '%')->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
        }

        // Upload gambar baru kalau ada
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image_peternakan'), $imageName);
            $perternakan->image = $imageName;
        }

        $perternakan->update([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_ternak' => $request->jenis_ternak,
            'jumlah_ternak' => $request->jumlah_ternak,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $perternakan->image,
        ]);

        return redirect()->route('admin.perternakans.index')->with('success', 'Data berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $perternakan = Perternakan::findOrFail($id);
        if ($perternakan->image && file_exists(public_path('image_peternakan/' . $perternakan->image))) {
            unlink(public_path('image_peternakan/' . $perternakan->image));
        }
        $perternakan->delete();

        return redirect()->route('admin.perternakans.index')->with('success', 'Data berhasil dihapus');
    }
}
