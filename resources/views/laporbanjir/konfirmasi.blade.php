@extends('layouts.app')

@section('title', 'Detail Laporan Banjir')

@section('content')
    <h2>Detail Laporan Banjir</h2>
    <x-alert type="success" message="Laporan berhasil dikirim!" />
    <div class="card">
        <p><strong>Nama Pelapor:</strong> {{ $dataPelapor['nama'] }}</p>
        <p><strong>Lokasi Kejadian:</strong> {{ $dataPelapor['lokasi'] }}</p>
        <p><strong>Tinggi Genangan Air:</strong> {{ $dataPelapor['tinggi_air'] }} cm</p>
        <p><strong>Tanggal:</strong> {{ $dataPelapor['tanggal'] }}</p>
    </div>
    <br>
    <a href="{{ route('laporbanjir.create') }}" style="color: #0066cc; text-decoration: none;">Kembali ke Form</a>
@endsection