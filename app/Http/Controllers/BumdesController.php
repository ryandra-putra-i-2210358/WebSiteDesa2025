<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BumdesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bumdess = Bumdes::latest()->get();
        return view('back_site.bumdess.index', compact('bumdess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_site.bumdess.create');
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
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'image' => 'nullable',
        ]);

        $data = $request->only('name', 'jabatan');
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_bumdes'), $imageName);
            $data['image'] = 'image_bumdes/' . $imageName;
        }
        
        Bumdes::create($data);
        
        return redirect()->route('admin.bumdess.index')->with('success', 'Anggota Bumdes berhasil ditambahkan');
    }
    
    /**
     * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        $bumdes = Bumdes::findOrFail($id);
        return view('back_site.bumdess.show', compact('bumdes'));
    }
    
    /**
     * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $bumdes = Bumdes::findOrFail($id);
        return view('back_site.bumdess.edit', compact('bumdes'));
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
        $bumdes = Bumdes::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'image' => 'nullable',
        ]);
        
        $data = $request->only('name', 'jabatan');
        
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($bumdes->image && File::exists(public_path($bumdes->image))) {
                File::delete(public_path($bumdes->image));
            }
            
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_bumdes'), $imageName);
            $data['image'] = 'image_bumdes/' . $imageName;
        }

        $bumdes->update($data);
        
        return redirect()->route('admin.bumdess.index')->with('success', 'Anggota Bumdes berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        $bumdes = Bumdes::findOrFail($id);

        // Hapus file gambar
        if ($bumdes->image && File::exists(public_path($bumdes->image))) {
            File::delete(public_path($bumdes->image));
        }
        $bumdes->delete();

        return redirect()->route('admin.bumdess.index')->with('success', 'Anggota Bumdes berhasil dihapus');
    }
}
