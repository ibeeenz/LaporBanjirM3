@extends('layouts.app')

@section('title', 'Form LaporBanjir')

@section('content')
    <h2>Form LaporBanjir</h2>
    <div class="card">
        <form action="{{ route('laporbanjir.store') }}" method="POST">
            @csrf
            <label>Nama Pelapor:</label>
            <input type="text" name="nama" required>

            <label>Lokasi Kejadian:</label>
            <input type="text" name="lokasi" required>

            <label>Tinggi Genangan Air (cm):</label>
            <input type="number" name="tinggi_air" required>

            <button type="submit" class="btn">Kirim Laporan</button>
        </form>
    </div>
@endsection