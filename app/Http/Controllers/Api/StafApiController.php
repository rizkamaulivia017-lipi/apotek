<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\StafApotek;
use Illuminate\Http\Request;

class StafApiController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'data' => StafApotek::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'no_hp' => 'required'
        ]);

        $staf = StafApotek::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Data staf berhasil ditambahkan',
            'data' => $staf
        ], 201);
    }

    public function show($id)
    {
        return response()->json(StafApotek::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $staf = StafApotek::findOrFail($id);

        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required',
            'no_hp' => 'required'
        ]);

        $staf->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Data staf berhasil diubah',
            'data' => $staf
        ]);
    }

    public function destroy($id)
    {
        $staf = StafApotek::findOrFail($id);
        $staf->delete();

        return response()->json([
            'success' => true,
            'message' => 'Data staf berhasil dihapus'
        ]);
    }
}