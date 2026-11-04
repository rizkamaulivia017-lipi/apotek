<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::latest()->get();
        return view('obat.index', compact('obats'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_obat' => 'required|unique:obats,kode_obat',
            'nama_obat' => 'required',
            'stok_obat' => 'required|integer|min:0',
            'tanggal_expired' => 'required|date',
        ]);

        Obat::create($request->all());

        return redirect()->route('obat.index')
            ->with('success', 'Data obat berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $request->validate([
            'kode_obat' => 'required|unique:obats,kode_obat,' . $id,
            'nama_obat' => 'required',
            'stok_obat' => 'required|integer|min:0',
            'tanggal_expired' => 'required|date',
        ]);

        $obat->update($request->all());

        return redirect()->route('obat.index')
            ->with('success', 'Data obat berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Obat::findOrFail($id)->delete();

        return redirect()->route('obat.index')
            ->with('success', 'Data obat berhasil dihapus!');
    }
}
