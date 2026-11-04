
@extends('layouts.app')

@section('title', 'Tambah Obat')
@section('heading', 'Tambah Obat')

@section('content')
<div class="content-card">

    <div class="mb-4">
        <h4 class="fw-bold">Form Tambah Obat</h4>
        <p class="text-muted">Masukkan informasi obat baru ke dalam database.</p>
    </div>

    <form action="{{ route('obat.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Kode Obat</label>
            <input type="text"
                   name="kode_obat"
                   class="form-control"
                   placeholder="Contoh: OBT001"
                   value="{{ old('kode_obat') }}"
                   required>
            @error('kode_obat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Obat</label>
            <input type="text"
                   name="nama_obat"
                   class="form-control"
                   placeholder="Masukkan nama obat"
                   value="{{ old('nama_obat') }}"
                   required>
            @error('nama_obat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Stok Obat</label>
            <input type="number"
                   name="stok_obat"
                   class="form-control"
                   placeholder="Masukkan jumlah stok"
                   min="0"
                   value="{{ old('stok_obat') }}"
                   required>
            @error('stok_obat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">Tanggal Kadaluarsa</label>
            <input type="date"
                   name="tanggal_expired"
                   class="form-control"
                   value="{{ old('tanggal_expired') }}"
                   required>
            @error('tanggal_expired')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan
        </button>

        <a href="{{ route('obat.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>
</div>
@endsection
