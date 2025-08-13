<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others = Other::latest()->get();
        return view('back_site.others.index', compact('others'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back_site.others.create');
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
            'jenis_other' => 'required|string|max:100',
            'jumlah_other' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable',
        ]);

        $slug = Str::slug($request->farm);
        $count = Other::where('slug', 'like', $slug . '%')->count();
        if ($count > 0) {
            $slug .= '-' . ($count + 1);
        }
        // Upload gambar
        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_other'), $imageName);
        }

        Other::create([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_other' => $request->jenis_other,
            'jumlah_other' => $request->jumlah_other,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $imageName,
        ]);

         return redirect()->route('admin.others.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $other = Other::findOrFail($id);
        return view('back_site.others.show', compact('other'));
    }
    
    /**
     * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
        $other = Other::findOrFail($id);
        return view('back_site.others.edit', compact('other'));
        
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
        $other = Other::findOrFail($id);
        
        $request->validate([
            'farm' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nohp' => 'required|string|max:20',
            'jenis_other' => 'required|string|max:100',
            'jumlah_other' => 'nullable|integer',
            'pemilik' => 'nullable|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable',
        ]);

        $slug = $other->slug;
        if ($request->farm != $other->farm) {
            $slug = Str::slug($request->farm);
            $count = Other::where('slug', 'like', $slug . '%')->count();
            if ($count > 0) {
                $slug .= '-' . ($count + 1);
            }
        }

        if ($request->hasFile('image')) {
            if ($other->image && file_exists(public_path('image_other/' . $other->image))) {
                unlink(public_path('image_other/' . $other->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image_other'), $imageName);
            $other->image = $imageName;
        }

        $other->update([
            'farm' => $request->farm,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
            'jenis_other' => $request->jenis_other,
            'jumlah_other' => $request->jumlah_other,
            'pemilik' => $request->pemilik,
            'slug' => $slug,
            'content' => $request->content,
            'image' => $other->image,
        ]);

         return redirect()->route('admin.others.index')->with('success', 'Data berhasil diperbarui');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $other = Other::findOrFail($id);
        if ($other->image && file_exists(public_path('image_other/' . $other->image))) {
            unlink(public_path('image_other/' . $other->image));
        }

        $other->delete();
        return redirect()->route('admin.others.index')->with('success', 'Data berhasil dihapus');
    }
}
