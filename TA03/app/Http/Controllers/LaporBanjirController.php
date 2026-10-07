<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('lapor.form');
    }

    public function store(Request $request)
    {
        $laporan = $request->validate([
            'nama' => 'required',
            'lokasi' => 'required',
            'tinggi' => 'required|numeric',
        ]);

        session(['laporan' => $laporan]);

        return redirect()->route('lapor.konfirmasi');
    }

    public function konfirmasi()
    {
        $laporan = session('laporan');

        return view('lapor.konfirmasi', compact('laporan'));
    }

    public function daftar()
    {
        $laporan = [
            [
                'nama' => 'Andi',
                'lokasi' => 'Baleendah',
                'tinggi' => 25,
            ],
            [
                'nama' => 'Siti',
                'lokasi' => 'Dayeuhkolot',
                'tinggi' => 50,
            ],
            [
                'nama' => 'Budi',
                'lokasi' => 'Banjaran',
                'tinggi' => 80,
            ],
        ];

        return view('lapor.daftar', compact('laporan'));
    }
}