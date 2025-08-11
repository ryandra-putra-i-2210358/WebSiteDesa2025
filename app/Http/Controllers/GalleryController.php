<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::latest()->get();
        return view('back_site.gallerys.index', compact('gallerys'));
    }

    public function create()
    {
        return view('back_site.gallerys.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'required',
        ]);

        $data = $request->only('judul');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_gallery'), $imageName);
            $data['image'] = 'image_gallery/' . $imageName;
        }

        Gallery::create($data);

        return redirect()->route('admin.gallerys.index')->with('success', 'Gallery berhasil ditambahkan');
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('back_site.gallerys.show', compact('gallery'));
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('back_site.gallerys.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'image' => 'nullable',
        ]);

        $data = $request->only('judul');

        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($gallery->image && File::exists(public_path($gallery->image))) {
                File::delete(public_path($gallery->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_gallery'), $imageName);
            $data['image'] = 'image_gallery/' . $imageName;
        }

        $gallery->update($data);

        return redirect()->route('admin.gallerys.index')->with('success', 'Gallery berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        // Hapus file gambar
        if ($gallery->image && File::exists(public_path($gallery->image))) {
            File::delete(public_path($gallery->image));
        }

        $gallery->delete();

        return redirect()->route('admin.gallerys.index')->with('success', 'Gallery berhasil dihapus');
    }
}
