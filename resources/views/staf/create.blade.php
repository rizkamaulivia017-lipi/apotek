
@extends('layouts.app')

@section('title', 'Tambah Staf Apotek')
@section('heading', 'Tambah Staf Apotek')

@section('content')
<div class="content-card">

    <div class="mb-4">
        <h4 class="fw-bold">Form Tambah Staf Apotek</h4>
        <p class="text-muted">Masukkan informasi staf apotek baru.</p>
    </div>

    <form action="{{ route('staf.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Staf</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   placeholder="Masukkan nama staf"
                   value="{{ old('nama') }}"
                   required>
            @error('nama')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Alamat</label>
            <textarea name="alamat"
                      class="form-control"
                      rows="3"
                      placeholder="Masukkan alamat staf"
                      required>{{ old('alamat') }}</textarea>
            @error('alamat')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Tanggal Lahir</label>
            <input type="date"
                   name="tanggal_lahir"
                   class="form-control"
                   value="{{ old('tanggal_lahir') }}"
                   required>
            @error('tanggal_lahir')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Tempat Lahir</label>
            <input type="text"
                   name="tempat_lahir"
                   class="form-control"
                   placeholder="Masukkan tempat lahir"
                   value="{{ old('tempat_lahir') }}"
                   required>
            @error('tempat_lahir')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">No HP</label>
            <input type="text"
                   name="no_hp"
                   class="form-control"
                   placeholder="Masukkan nomor HP"
                   value="{{ old('no_hp') }}"
                   required>
            @error('no_hp')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan
        </button>

        <a href="{{ route('staf.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>
</div>
@endsection
