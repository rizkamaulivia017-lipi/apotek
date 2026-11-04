
@extends('layouts.app')

@section('title', 'Tambah Pelanggan')
@section('heading', 'Tambah Pelanggan')

@section('content')

<div class="content-card">

    <div class="mb-4">
        <h4 class="fw-bold">Form Tambah Pelanggan</h4>
        <p class="text-muted">Masukkan informasi pelanggan baru.</p>
    </div>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Pelanggan</label>
            <input type="text" name="nama"
                   class="form-control"
                   placeholder="Masukkan nama pelanggan"
                   value="{{ old('nama') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Alamat</label>
            <textarea name="alamat" class="form-control"
                      rows="3"
                      placeholder="Masukkan alamat"
                      required>{{ old('alamat') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">No HP</label>
            <input type="text" name="no_hp"
                   class="form-control"
                   placeholder="Masukkan nomor HP"
                   value="{{ old('no_hp') }}" required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan
        </button>

        <a href="{{ route('pelanggan.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>
    </form>

</div>

@endsection
