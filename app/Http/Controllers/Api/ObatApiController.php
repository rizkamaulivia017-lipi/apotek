<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ObatApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => Obat::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_obat' => 'required|unique:obats,kode_obat',
            'nama_obat' => 'required',
            'stok_obat' => 'required|integer|min:0',
            'tanggal_expired' => 'required|date'
        ]);

        $obat = Obat::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Data obat berhasil ditambahkan',
            'data' => $obat
        ], 201);
    }

    public function show($id)
    {
        return response()->json(Obat::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $obat = Obat::findOrFail($id);

        $data = $request->validate([
            'kode_obat' => [
                'required',
                Rule::unique('obats', 'kode_obat')->ignore($id)
            ],
            'nama_obat' => 'required',
            'stok_obat' => 'required|integer|min:0',
            'tanggal_expired' => 'required|date'
        ]);

        $obat->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Data obat berhasil diubah',
            'data' => $obat
        ]);
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data obat berhasil dihapus'
        ]);
    }
}