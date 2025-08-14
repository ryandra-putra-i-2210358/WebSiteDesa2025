<?php

namespace App\Http\Controllers;

use App\Models\InfoGrafi;
use Illuminate\Http\Request;

class InfoGrafiController extends Controller
{
    public function index()
    {
        $infografi = InfoGrafi::latest()->first();
        return view('back_site.infografis.index', compact('infografi'));
    }

    public function create()
    {
        if ($this->hasExistingData()) {
            return redirect()->route('admin.infografis.index')
                ->with('error', 'Data demografi sudah ada.');
        }
        return view('back_site.infografis.create');
    }

    public function store(Request $request)
    {
        if ($this->hasExistingData()) {
            return redirect()->route('admin.infografis.index')
                ->with('error', 'Data demografi sudah ada.');
        }

        $data = $this->validateData($request);

        InfoGrafi::create($data);

        return redirect()->route('admin.infografis.index')
            ->with('success', 'Data demografi berhasil disimpan.');
    }

    public function edit($id)
    {
        $infografi = InfoGrafi::findOrFail($id);
        return view('back_site.infografis.edit', compact('infografi'));
    }
    
    public function update(Request $request, $id)
    {
        $data = $this->validateData($request);

        $infografi = InfoGrafi::findOrFail($id);
        $infografi->update($data);

        return redirect()->route('admin.infografis.index')
            ->with('success', 'Data demografi berhasil diperbarui.');
    }

    public function show($id)
    {
        abort(404);
    }

    public function destroy($id)
    {
        abort(404);
    }

    /** Helper validasi data */
    private function validateData(Request $request)
    {
        $validated = $request->validate([
            'total_penduduk' => 'required|integer|min:0',
            'kepala_keluarga' => 'required|integer|min:0',
            'perempuan' => 'required|integer|min:0',
            'laki_laki' => 'required|integer|min:0',

            'rw' => 'nullable|array',
            'agama' => 'nullable|array',
            'pendidikan' => 'nullable|array',
            'status_perkawinan' => 'nullable|array',
        ]);

        return [
            'total_penduduk' => $validated['total_penduduk'],
            'kepala_keluarga' => $validated['kepala_keluarga'],
            'perempuan' => $validated['perempuan'],
            'laki_laki' => $validated['laki_laki'],
            'rw' => $validated['rw'] ?? [],
            'agama' => $validated['agama'] ?? [],
            'pendidikan' => $validated['pendidikan'] ?? [],
            'status_perkawinan' => $validated['status_perkawinan'] ?? [],
        ];
    }

    /** Helper cek data sudah ada */
    private function hasExistingData()
    {
        return InfoGrafi::count() > 0;
    }
}
