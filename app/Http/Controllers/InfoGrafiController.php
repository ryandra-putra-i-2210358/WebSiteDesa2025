<?php

namespace App\Http\Controllers;

use App\Models\InfoGrafi;
use Illuminate\Http\Request;

class InfoGrafiController extends Controller
{
    public function index()
    {
        $infografi = InfoGrafi::latest()->first();

        if (!$infografi) {
            return redirect()->route('admin.infografis.create')
                ->with('info', 'Silakan isi data infografis terlebih dahulu.');
        }
        
        if ($infografi) {
            // Filter RW
            $infografi->rw = collect($infografi->rw)
                ->reject(function ($value, $key) {
                    return in_array($key, ['new_key', 'new_value']) || $value === 'new_value';
                })
                ->toArray();
            $infografi->agama = collect($infografi->agama)
                ->reject(fn($value, $key) => in_array($key, ['new_key', 'new_value']) || $value === 'new_value')
                ->toArray();

            $infografi->pendidikan = collect($infografi->pendidikan)
                ->reject(fn($value, $key) => in_array($key, ['new_key', 'new_value']) || $value === 'new_value')
                ->toArray();
            $infografi->status_perkawinan = collect($infografi->status_perkawinan)
                ->reject(fn($value, $key) => in_array($key, ['new_key', 'new_value']) || $value === 'new_value')
                ->toArray(); 
        }



        return view('back_site.infografis.index', compact('infografi'));
    }

    public function create()
    {
        if ($this->hasExistingData()) {
            return redirect()->route('admin.infografis.index')
                ->with('error', 'Data demografi sudah ada.');
        }

        // Kalau mau kasih data kosong (default array), cukup buat instance baru
        $infografi = new InfoGrafi();

        return view('back_site.infografis.create', compact('infografi'));
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

        if ($infografi) {
            // Filter RW
            $infografi->rw = collect($infografi->rw)
                ->reject(function ($value, $key) {
                    return in_array($key, ['new_key', 'new_value']) || $value === 'new_value';
                })
                ->toArray();
            $infografi->agama = collect($infografi->agama)
                ->reject(fn($value, $key) => in_array($key, ['new_key', 'new_value']) || $value === 'new_value')
                ->toArray();

            $infografi->pendidikan = collect($infografi->pendidikan)
                ->reject(fn($value, $key) => in_array($key, ['new_key', 'new_value']) || $value === 'new_value')
                ->toArray();
            $infografi->status_perkawinan = collect($infografi->status_perkawinan)
                ->reject(fn($value, $key) => in_array($key, ['new_key', 'new_value']) || $value === 'new_value')
                ->toArray(); 
        }




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

    public function storeDefault()
    {
        if ($this->hasExistingData()) {
            return redirect()->route('admin.infografis.index')
                ->with('error', 'Data demografi sudah ada.');
        }

        $infografi = new InfoGrafi();
        $infografi->isiAja()->save();

        return redirect()->route('admin.infografis.index')
            ->with('success', 'Data default demografi berhasil disimpan.');
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
