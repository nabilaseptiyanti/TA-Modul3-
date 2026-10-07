<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporBanjirController extends Controller
{
    public function form()
    {
        return view('laporbanjir.form');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'tinggi' => 'required|numeric|min:1',
        ]);

        $data = [
            'nama' => $request->input('nama'),
            'kecamatan' => $request->input('kecamatan'),
            'desa' => $request->input('desa'),
            'tinggi' => $request->input('tinggi'),
        ];

        return view('laporbanjir.konfirmasi', compact('data'));
    }
}