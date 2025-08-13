<?php

namespace App\Http\Controllers;

use App\Models\Pertanian;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PertanianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanians = Pertanian::latest()->get();
        return view('back_site.pertanians.index', compact('pertanians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_site.pertanians.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'farm' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'jenis_pertanian' => 'required|string|max:100',
            'jumlah_pertanian' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image', 
        ]);

        $slug = Str::slug($request->farm);
        $count = Pertanian::where('slug', 'like', $slug . '%')->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_pertanian'), $imageName);
        }

        Pertanian::create([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_pertanian' => $request->jenis_pertanian,
            'jumlah_pertanian' => $request->jumlah_pertanian,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.pertanians.index')->with('success', 'Data berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pertanian = Pertanian::findOrFail($id);
        return view('back_site.pertanians.show', compact('pertanian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pertanian = Pertanian::findOrFail($id);
        return view('back_site.pertanians.edit', compact('pertanian'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pertanian = Pertanian::findOrFail($id);

        $request->validate([
            'farm' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'jenis_pertanian' => 'required|string|max:100',
            'jumlah_pertanian' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048', 
        ]);

        $slug = $pertanian->slug;
        if ($request->farm != $pertanian->farm) {
            $slug = Str::slug($request->farm);
            $count = Pertanian::where('slug', 'like', $slug . '%')->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
        }

        // Jika ada gambar baru, hapus gambar lama
        if ($request->hasFile('image')) {
            if ($pertanian->image && file_exists(public_path('image_pertanian/' . $pertanian->image))) {
                unlink(public_path('image_pertanian/' . $pertanian->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_pertanian'), $imageName);
            $pertanian->image = $imageName;
        }

        $pertanian->update([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_pertanian' => $request->jenis_pertanian,
            'jumlah_pertanian' => $request->jumlah_pertanian,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $pertanian->image,
        ]);

        return redirect()->route('admin.pertanians.index')->with('success', 'Data berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pertanian = Pertanian::findOrFail($id);

        if ($pertanian->image && file_exists(public_path('image_pertanian/' . $pertanian->image))) {
            unlink(public_path('image_pertanian/' . $pertanian->image));
        }

        $pertanian->delete();
        return redirect()->route('admin.pertanians.index')->with('success', 'Data berhasil dihapus');
    }
}
