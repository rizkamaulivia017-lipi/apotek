
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') - Apotek Sehat</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f4f7f6;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #126b50;
            position: fixed;
            top: 0;
            left: 0;
            padding: 25px 18px;
            color: white;
        }

        .brand {
            font-size: 23px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .sidebar a {
            display: block;
            color: #e4f4ed;
            text-decoration: none;
            padding: 13px;
            margin-bottom: 8px;
            border-radius: 9px;
            transition: 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #ffffff;
            color: #126b50;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .topbar {
            background: white;
            padding: 18px 25px;
            border-radius: 12px;
            margin-bottom: 25px;
            box-shadow: 0 2px 10px rgba(0,0,0,.04);
        }

        .stat-card {
            background: white;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 3px 12px rgba(0,0,0,.05);
            height: 100%;
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: #e2f3eb;
            color: #126b50;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }

        .content-card {
            background: white;
            border-radius: 14px;
            padding: 25px;
            box-shadow: 0 3px 12px rgba(0,0,0,.04);
        }

        .btn-success {
            background: #126b50;
            border-color: #126b50;
        }

        .btn-success:hover {
            background: #0c513c;
            border-color: #0c513c;
        }

        @media(max-width: 768px) {
            .sidebar {
                width: 75px;
                padding: 15px 8px;
            }

            .sidebar .menu-text,
            .brand-text {
                display: none;
            }

            .main-content {
                margin-left: 75px;
                padding: 15px;
            }
        }
    </style>
</head>

<body>

<div class="sidebar">
    <div class="brand">
        <i class="bi bi-capsule"></i>
        <span class="brand-text">Apotek Sehat</span>
    </div>

    <small class="text-white-50 menu-text">MENU UTAMA</small>

    <a href="{{ route('dashboard') }}"
       class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <i class="bi bi-grid"></i>
        <span class="menu-text"> Dashboard</span>
    </a>

    <a href="{{ route('pelanggan.index') }}"
       class="{{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
        <i class="bi bi-people"></i>
        <span class="menu-text"> Pelanggan</span>
    </a>

    <a href="{{ route('staf.index') }}"
       class="{{ request()->routeIs('staf.*') ? 'active' : '' }}">
        <i class="bi bi-person-badge"></i>
        <span class="menu-text"> Staf Apotek</span>
    </a>

    <a href="{{ route('obat.index') }}"
       class="{{ request()->routeIs('obat.*') ? 'active' : '' }}">
        <i class="bi bi-capsule-pill"></i>
        <span class="menu-text"> Daftar Obat</span>
    </a>
</div>

<div class="main-content">

    <div class="topbar d-flex justify-content-between align-items-center">
        <div>
            <h5 class="mb-1 fw-bold">@yield('heading')</h5>
            <small class="text-muted">Sistem Informasi Manajemen Apotek</small>
        </div>

        <div class="text-success fw-semibold">
            <i class="bi bi-hospital"></i> Apotek Sehat
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <strong>Periksa kembali data:</strong>
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
