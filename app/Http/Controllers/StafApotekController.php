<?php

namespace App\Http\Controllers;

use App\Models\StafApotek;
use Illuminate\Http\Request;

class StafApotekController extends Controller
{
    public function index()
    {
        $stafs = StafApotek::latest()->get();
        return view('staf.index', compact('stafs'));
    }

    public function create()
    {
        return view('staf.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        StafApotek::create($request->all());

        return redirect()->route('staf.index')
            ->with('success', 'Staf berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $staf = StafApotek::findOrFail($id);
        return view('staf.edit', compact('staf'));
    }

    public function update(Request $request, $id)
    {
        $staf = StafApotek::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'no_hp' => 'required',
        ]);

        $staf->update($request->all());

        return redirect()->route('staf.index')
            ->with('success', 'Data staf berhasil diperbarui!');
    }

    public function destroy($id)
    {
        StafApotek::findOrFail($id)->delete();

        return redirect()->route('staf.index')
            ->with('success', 'Data staf berhasil dihapus!');
    }
}
