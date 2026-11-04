
@extends('layouts.app')

@section('title', 'Data Staf Apotek')
@section('heading', 'Data Staf Apotek')

@section('content')
<div class="content-card">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="fw-bold mb-1">Daftar Staf Apotek</h4>
            <p class="text-muted mb-0">Kelola data staf apotek.</p>
        </div>

        <a href="{{ route('staf.create') }}" class="btn btn-success">
            <i class="bi bi-plus-circle"></i> Tambah Staf
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-success">
                <tr>
                    <th>No</th>
                    <th>ID Staff</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>No HP</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($stafs as $staf)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $staf->id }}</td>
                        <td>{{ $staf->nama }}</td>
                        <td>{{ $staf->alamat }}</td>
                        <td>{{ $staf->tanggal_lahir }}</td>
                        <td>{{ $staf->tempat_lahir }}</td>
                        <td>{{ $staf->no_hp }}</td>
                        <td>
                            <a href="{{ route('staf.edit', $staf->id) }}"
                               class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <form action="{{ route('staf.destroy', $staf->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data staf ini?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center text-muted py-4">
                            Belum ada data staf apotek.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
