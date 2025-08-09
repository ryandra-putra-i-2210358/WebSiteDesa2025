<?php

namespace App\Http\Controllers;

use App\Models\VillageHead;
use Illuminate\Http\Request;

class VillageHeadController extends Controller
{
    public function index()
    {
        $villageHead = VillageHead::first();
        return view('back_site.village_heads.index', compact('villageHead'));
    }

    public function create()
    {
        if (VillageHead::count() > 0) {
            return redirect()->route('village-head.index')
                ->with('error', 'Data Kepala Desa sudah ada.');
        }
        return view('back_site.village_heads.create');
    }

    public function store(Request $request)
    {
        if (VillageHead::count() > 0) {
            return redirect()->route('admin.village_heads.index')
                ->with('error', 'Data Kepala Desa sudah ada.');
        }

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image',
            'image_signature' => 'nullable|image',
            'welcome_text' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_image.' . $file->getClientOriginalExtension();
            $file->move(public_path('image_kades'), $filename);
            $data['image'] = 'image_kades/' . $filename;
        }

        if ($request->hasFile('image_signature')) {
            $file = $request->file('image_signature');
            $filename = time() . '_signature.' . $file->getClientOriginalExtension();
            $file->move(public_path('image_kades'), $filename);
            $data['image_signature'] = 'image_kades/' . $filename;
        }

        VillageHead::create($data);

        return redirect()->route('admin.village_heads.index')->with('success', 'Profil Kepala Desa berhasil dibuat.');
    }

    public function show($id)
    {
        abort(404);
    }

    public function edit($id)
    {
        $villageHead = VillageHead::findOrFail($id);
        return view('back_site.village_heads.edit', compact('villageHead'));
    }

    public function update(Request $request, $id)
    {
        $villageHead = VillageHead::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image',
            'image_signature' => 'nullable|image',
            'welcome_text' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_image.' . $file->getClientOriginalExtension();
            $file->move(public_path('image_kades'), $filename);
            $data['image'] = 'image_kades/' . $filename;
        }

        if ($request->hasFile('image_signature')) {
            $file = $request->file('image_signature');
            $filename = time() . '_signature.' . $file->getClientOriginalExtension();
            $file->move(public_path('image_kades'), $filename);
            $data['image_signature'] = 'image_kades/' . $filename;
        }

        $villageHead->update($data);

        return redirect()->route('admin.village_heads.index')->with('success', 'Profil Kepala Desa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        abort(404);
    }
}
