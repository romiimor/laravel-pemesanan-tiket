<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use Illuminate\Support\Str; // <== PENEMPATAN YANG BENAR

class PembelianController extends Controller
{
    public function index()
    {
    return view('pembelian.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'jumlah_tiket' => 'required|integer|min:1',
        ]);

        // Generate kode booking unik
        $kode_booking = 'WTK-' . strtoupper(Str::random(6));

        // Simpan ke database
        $pembelian = Pembelian::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jumlah_tiket' => $request->jumlah_tiket,
            'kode_booking' => $kode_booking,
        ]);

        return view('pembelian.struk', compact('pembelian'));
    }
}
