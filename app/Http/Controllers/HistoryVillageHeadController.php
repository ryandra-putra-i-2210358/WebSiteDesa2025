<?php

namespace App\Http\Controllers;

use App\Models\HistoryVillageHead;
use Illuminate\Http\Request;

class HistoryVillageHeadController extends Controller
{
    public function index()
    {
        $historys = HistoryVillageHead::orderBy('start_year', 'asc')->get();
        return view('back_site.history_heads.index', compact('historys'));
    }

    public function create()
    {
        return view('back_site.history_heads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'start_year' => 'required|integer|min:1901|max:2155',
            'end_year' => 'nullable',
        ]);

        HistoryVillageHead::create($request->all());

        return redirect()->route('admin.history_heads.index')
            ->with('success', 'Data kepala desa berhasil ditambahkan.');
    }

    public function show($id)
    {
        $history = HistoryVillageHead::findOrFail($id);
        return view('back_site.history_heads.show', compact('history'));
    }

    public function edit($id)
    {
        $history = HistoryVillageHead::findOrFail($id);
        return view('back_site.history_heads.edit', compact('history'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'start_year' => 'required|integer|min:1900|max:2999',
            'end_year' => 'nullable',
        ]);

        $history = HistoryVillageHead::findOrFail($id);
        $history->update($request->all());

        return redirect()->route('admin.history_heads.index')
            ->with('success', 'Data kepala desa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $history = HistoryVillageHead::findOrFail($id);
        $history->delete();

        return redirect()->route('admin.history_heads.index')
            ->with('success', 'Data kepala desa berhasil dihapus.');
    }
}
