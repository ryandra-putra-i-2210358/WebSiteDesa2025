<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wisatas = Wisata::latest()->get();
        return view('back_site.wisatas.index', compact('wisatas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_site.wisatas.create');
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
            'jenis_wisata' => 'required|string|max:100',
            'jumlah_wisata' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable',
        ]);

        // Slug unik
        $slug = Str::slug($request->farm);
        $count = Wisata::where('slug', 'like', $slug . '%')->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_wisata'), $imageName);
        }

       Wisata::create([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_wisata' => $request->jenis_wisata,
            'jumlah_wisata' => $request->jumlah_wisata,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imageName,
        ]);

         return redirect()->route('admin.wisatas.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('back_site.wisatas.show', compact('wisata'));
    }
    
    /**
     * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $wisata = Wisata::findOrFail($id);
        return view('back_site.wisatas.edit', compact('wisata'));
        
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
        $wisata = Wisata::findOrFail($id);

        $request->validate([
            'farm' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'jenis_wisata' => 'required|string|max:100',
            'jumlah_wisata' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable',
        ]);

        $slug = $wisata->slug;
        if ($request->farm != $wisata->farm) {
            $slug = Str::slug($request->farm);
            $count = Wisata::where('slug', 'like', $slug . '%')->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
        }
        if ($request->hasFile('image')) {
            if ($wisata->image && file_exists(public_path('image_wisata/' . $wisata->image))) {
                unlink(public_path('image_wisata/' . $wisata->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_wisata'), $imageName);
            $wisata->image = $imageName;
        }

        $wisata->update([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_wisata' => $request->jenis_wisata,
            'jumlah_wisata' => $request->jumlah_wisata,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $wisata->image,
        ]);

        return redirect()->route('admin.wisatas.index')->with('success', 'Data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $wisata = Wisata::findOrFail($id);
        if ($wisata->image && file_exists(public_path('image_wisata/' . $wisata->image))) {
            unlink(public_path('image_wisata/' . $wisata->image));
        }

        $wisata->delete();
        return redirect()->route('admin.wisatas.index')->with('success', 'Data berhasil dihapus');
    }
}
