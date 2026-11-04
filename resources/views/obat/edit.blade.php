
@extends('layouts.app')

@section('title', 'Edit Obat')
@section('heading', 'Edit Obat')

@section('content')
<div class="content-card">

    <div class="mb-4">
        <h4 class="fw-bold">Form Edit Obat</h4>
        <p class="text-muted">Ubah informasi obat di bawah ini.</p>
    </div>

    <form action="{{ route('obat.update', $obat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-semibold">Kode Obat</label>
            <input type="text"
                   name="kode_obat"
                   class="form-control"
                   value="{{ old('kode_obat', $obat->kode_obat) }}"
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
                   value="{{ old('nama_obat', $obat->nama_obat) }}"
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
                   min="0"
                   value="{{ old('stok_obat', $obat->stok_obat) }}"
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
                   value="{{ old('tanggal_expired', $obat->tanggal_expired) }}"
                   required>
            @error('tanggal_expired')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan Perubahan
        </button>

        <a href="{{ route('obat.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>
</div>
@endsection
