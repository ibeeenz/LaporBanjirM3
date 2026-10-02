<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - LaporBanjir</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <header>
        <h2>Sistem Pelaporan Banjir</h2>
        <nav>
            <a href="{{ route('laporbanjir.index') }}">Daftar Laporan</a>
            <a href="{{ route('laporbanjir.create') }}">Form Pelaporan</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>