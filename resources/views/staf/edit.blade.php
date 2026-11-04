
@extends('layouts.app')

@section('title', 'Edit Staf Apotek')
@section('heading', 'Edit Staf Apotek')

@section('content')
<div class="content-card">

    <div class="mb-4">
        <h4 class="fw-bold">Form Edit Staf Apotek</h4>
        <p class="text-muted">Ubah informasi staf apotek di bawah ini.</p>
    </div>

    <form action="{{ route('staf.update', $staf->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-semibold">Nama Staf</label>
            <input type="text"
                   name="nama"
                   class="form-control"
                   value="{{ old('nama', $staf->nama) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Alamat</label>
            <textarea name="alamat"
                      class="form-control"
                      rows="3"
                      required>{{ old('alamat', $staf->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Tanggal Lahir</label>
            <input type="date"
                   name="tanggal_lahir"
                   class="form-control"
                   value="{{ old('tanggal_lahir', $staf->tanggal_lahir) }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Tempat Lahir</label>
            <input type="text"
                   name="tempat_lahir"
                   class="form-control"
                   value="{{ old('tempat_lahir', $staf->tempat_lahir) }}"
                   required>
        </div>

        <div class="mb-4">
            <label class="form-label fw-semibold">No HP</label>
            <input type="text"
                   name="no_hp"
                   class="form-control"
                   value="{{ old('no_hp', $staf->no_hp) }}"
                   required>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan Perubahan
        </button>

        <a href="{{ route('staf.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>
</div>
@endsection
