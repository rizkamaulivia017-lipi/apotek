
@extends('layouts.app')

@section('title', 'Edit Pelanggan')
@section('heading', 'Edit Pelanggan')

@section('content')
<div class="content-card">
    <div class="mb-4">
        <h4 class="fw-bold">Form Edit Pelanggan</h4>
        <p class="text-muted">Ubah informasi pelanggan di bawah ini.</p>
    </div>

    <form action="{{ route('pelanggan.update', $pelanggan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Pelanggan</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   value="{{ old('nama', $pelanggan->nama) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Alamat</label>
            <textarea name="alamat"
                      class="form-control"
                      rows="3"
                      required>{{ old('alamat', $pelanggan->alamat) }}</textarea>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">No HP</label>
            <input type="text"
                   name="no_hp"
                   class="form-control"
                   value="{{ old('no_hp', $pelanggan->no_hp) }}"
                   required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan Perubahan
        </button>

        <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
@endsection
