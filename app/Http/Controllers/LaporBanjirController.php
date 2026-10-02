<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function index()
    {
        $laporans = [
            [
                'nama' => 'Ibnu Rafif',
                'lokasi' => 'Jl. Dayeuhkolot No. 12',
                'tinggi_air' => 45,
                'tanggal' => '2026-10-02'
            ],
            [
                'nama' => 'Ibnu Ganteng',
                'lokasi' => 'Kp. Bojongsoang Indah',
                'tinggi_air' => 80,
                'tanggal' => '2026-10-02'
            ],
            [
                'nama' => 'Ibnu Keren',
                'lokasi' => 'Jl. Telecommunication',
                'tinggi_air' => 20, 
                'tanggal' => '2026-10-01'
            ]
        ];

        return view('laporbanjir.index', compact('laporans'));
    }

    public function create()
    {
        return view('laporbanjir.create');
    }

    public function store(Request $request)
    {
        $dataPelapor = [
            'nama' => $request->input('nama'),
            'lokasi' => $request->input('lokasi'),
            'tinggi_air' => $request->input('tinggi_air'),
            'tanggal' => date('Y-m-d')
        ];

        return view('laporbanjir.konfirmasi', compact('dataPelapor'));
    }
}