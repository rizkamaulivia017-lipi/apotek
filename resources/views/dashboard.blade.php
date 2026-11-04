
@extends('layouts.app')

@section('title', 'Dashboard')
@section('heading', 'Dashboard')

@section('content')

<div class="mb-4">
    <h4 class="fw-bold">Selamat Datang di Apotek Sehat!</h4>
    <p class="text-muted">
        Kelola data pelanggan, staf, dan persediaan obat dengan mudah.
    </p>
</div>

<div class="row g-4">

    <div class="col-md-4">
        <div class="stat-card">
            <div class="d-flex justify-content-between">
                <div>
                    <p class="text-muted mb-2">Total Pelanggan</p>
                    <h2 class="fw-bold">{{ $totalPelanggan }}</h2>
                    <small class="text-success">Data pelanggan apotek</small>
                </div>
                <div class="stat-icon">
                    <i class="bi bi-people"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card">
            <div class="d-flex justify-content-between">
                <div>
                    <p class="text-muted mb-2">Total Staf</p>
                    <h2 class="fw-bold">{{ $totalStaf }}</h2>
                    <small class="text-success">Staf apotek terdaftar</small>
                </div>
                <div class="stat-icon">
                    <i class="bi bi-person-badge"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card">
            <div class="d-flex justify-content-between">
                <div>
                    <p class="text-muted mb-2">Total Jenis Obat</p>
                    <h2 class="fw-bold">{{ $totalObat }}</h2>
                    <small class="text-success">Obat dalam database</small>
                </div>
                <div class="stat-icon">
                    <i class="bi bi-capsule"></i>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="content-card mt-4">
    <h5 class="fw-bold mb-3">Informasi Sistem</h5>
    <p class="text-muted">
        Aplikasi Sistem Informasi Apotek digunakan untuk membantu
        pengelolaan data pelanggan, staf apotek, dan daftar obat.
        Seluruh data tersimpan dalam database MySQL.
    </p>

    <div class="row g-3 mt-2">
        <div class="col-md-4">
            <a href="{{ route('pelanggan.index') }}"
               class="btn btn-success w-100">
                <i class="bi bi-people"></i> Data Pelanggan
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('staf.index') }}"
               class="btn btn-success w-100">
                <i class="bi bi-person-badge"></i> Data Staf
            </a>
        </div>

        <div class="col-md-4">
            <a href="{{ route('obat.index') }}"
               class="btn btn-success w-100">
                <i class="bi bi-capsule"></i> Data Obat
            </a>
        </div>
    </div>
</div>

@endsection
