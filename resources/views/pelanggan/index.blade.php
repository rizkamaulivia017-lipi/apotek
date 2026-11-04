
@extends('layouts.app')

@section('title', 'Data Pelanggan')
@section('heading', 'Data Pelanggan')

@section('content')

<div class="content-card">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold">Data Pelanggan</h4>
            <p class="text-muted mb-0">
                Kelola informasi pelanggan apotek.
            </p>
        </div>

        <a href="{{ route('pelanggan.create') }}"
           class="btn btn-success">
            <i class="bi bi-plus-circle"></i>
            Tambah Pelanggan
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover align-middle">

            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($pelanggans as $pelanggan)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pelanggan->id }}</td>
                    <td>{{ $pelanggan->nama }}</td>
                    <td>{{ $pelanggan->alamat }}</td>
                    <td>{{ $pelanggan->no_hp }}</td>
                    <td>
                        <a href="{{ route('pelanggan.edit', $pelanggan->id) }}"
                           class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </a>

                        <form action="{{ route('pelanggan.destroy', $pelanggan->id) }}"
                              method="POST"
                              class="d-inline"
                              onsubmit="return confirm('Yakin ingin menghapus data?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="6" class="text-center text-muted py-4">
                        Belum ada data pelanggan.
                    </td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>

@endsection
