<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $umkms = Umkm::latest()->get();
        return view('back_site.umkms.index', compact('umkms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_site.umkms.create');
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
            'jenis_umkm' => 'required|string|max:100',
            'jumlah_umkm' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image', 
        ]);

        $slug = Str::slug($request->farm);
        $count = Umkm::where('slug', 'like', $slug . '%')->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_umkm'), $imageName);
        }

        Umkm::create([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_umkm' => $request->jenis_umkm,
            'jumlah_umkm' => $request->jumlah_umkm,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.umkms.index')->with('success', 'Data berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('back_site.umkms.show', compact('umkm'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $umkm = Umkm::findOrFail($id);
        return view('back_site.umkms.edit', compact('umkm'));
        
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
        $umkm = Umkm::findOrFail($id);
        
        $request->validate([
            'farm' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'jenis_umkm' => 'required|string|max:100',
            'jumlah_umkm' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image', 
        ]);
        
        $slug = $umkm->slug;
        if ($request->farm != $umkm->farm) {
            $slug = Str::slug($request->farm);
            $count = Umkm::where('slug', 'like', $slug . '%')->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
        }
        
        if ($request->hasFile('image')) {
            if ($umkm->image && file_exists(public_path('image_umkm/' . $umkm->image))) {
                unlink(public_path('image_umkm/' . $umkm->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_umkm'), $imageName);
            $umkm->image = $imageName;
        }
        
        $umkm->update([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_umkm' => $request->jenis_umkm,
            'jumlah_umkm' => $request->jumlah_umkm,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $umkm->image,
        ]);
        
        return redirect()->route('admin.umkms.index')->with('success', 'Data berhasil diperbarui');
        
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $umkm = Umkm::findOrFail($id);
        if ($umkm->image && file_exists(public_path('image_umkm/' . $umkm->image))) {
            unlink(public_path('image_umkm/' . $umkm->image));
        }

        $umkm->delete();
        return redirect()->route('admin.umkms.index')->with('success', 'Data berhasil dihapus');
        //
    }
}
