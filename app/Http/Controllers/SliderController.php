<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::latest()->get();
        return view('back_site.sliders.index', compact('sliders'));
    }

    public function create()
    {
        return view('back_site.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'text' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('judul', 'text');

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('image_slider'), $gambarName);
            $data['gambar'] = 'image_slider/' . $gambarName;
        }

        Slider::create($data);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider berhasil ditambahkan');
    }

    public function show(Slider $slider)
    {
        return view('back_site.sliders.show', compact('slider'));
    }

    public function edit(Slider $slider)
    {
        return view('back_site.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'text' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only('judul', 'text');

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if ($slider->gambar && file_exists(public_path($slider->gambar))) {
                unlink(public_path($slider->gambar));
            }

            $gambar = $request->file('gambar');
            $gambarName = time() . '_' . $gambar->getClientOriginalName();
            $gambar->move(public_path('image_slider'), $gambarName);
            $data['gambar'] = 'image_slider/' . $gambarName;
        }

        $slider->update($data);

        return redirect()->route('admin.sliders.index')->with('success', 'Slider berhasil diperbarui');
    }

    public function destroy(Slider $slider)
    {
        if ($slider->gambar && file_exists(public_path($slider->gambar))) {
            unlink(public_path($slider->gambar));
        }

        $slider->delete();

        return redirect()->route('admin.sliders.index')->with('success', 'Slider berhasil dihapus');
    }
}
