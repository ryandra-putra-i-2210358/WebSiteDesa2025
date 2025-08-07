<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengumuman = Pengumuman::latest()->paginate(10);
        return view('back_site.pengumumans.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back_site.pengumumans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'    => 'required|string|max:255',
            'content'  => 'required|string',
            'tanggal'  => 'required|date',
            'penulis'  => 'required|string|max:100',
            'image'    => 'nullable|image',
        ]);

        $data = $request->only(['title', 'content', 'tanggal', 'penulis']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_pengumuman'), $imageName);
            $data['image'] = 'image_pengumuman/' . $imageName;
        }

        Pengumuman::create($data);

        return redirect()->route('admin.pengumumans.index')->with('success', 'Pengumuman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('back_site.pengumumans.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pengumuman = Pengumuman::findOrFail($id);
        return view('back_site.pengumumans.edit', compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pengumuman = Pengumuman::findOrFail($id);

        $request->validate([
            'title'    => 'required|string|max:255',
            'content'  => 'required|string',
            'tanggal'  => 'required|date',
            'penulis'  => 'required|string|max:100',
            'image'    => 'nullable|image',
        ]);

        $pengumuman->title   = $request->title;
        $pengumuman->penulis = $request->penulis;
        $pengumuman->tanggal = $request->tanggal;
        $pengumuman->content = $request->content;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($pengumuman->image && file_exists(public_path($pengumuman->image))) {
                unlink(public_path($pengumuman->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_pengumuman'), $imageName);
            $pengumuman->image = 'image_pengumuman/' . $imageName;
        }

        $pengumuman->save();

        return redirect()->route('admin.pengumumans.index')->with('success', 'Pengumuman berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengumuman $pengumuman)
    {
        if ($pengumuman->image && file_exists(public_path($pengumuman->image))) {
            unlink(public_path($pengumuman->image));
        }

        $pengumuman->delete();

        return redirect()->route('admin.pengumumans.index')->with('success', 'Pengumuman berhasil dihapus.');
    }
}
