<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiketController extends Controller

{
    public function index()
{
    // Data dummy tiket wisata
    $tiket = [
        [
            'nama' => 'Kolam renang Cibulan',
            'harga' => 20000,
            'deskripsi' => 'Wisata kolam ikan dewa.',
            'gambar' => 'cibulan1.jpg'
        ],
        [
            'nama' => 'Gunung Ciremai',
            'harga' => '5.000 - 150.000',
            'deskripsi' => 'Tujuan populer para pendaki seindonesia.',
            'gambar' => 'ceremai1.jpg'
        ],
        [
            'nama' => 'Telaga Biru',
            'harga' => 15000,
            'deskripsi' => 'Wisata keindahan dengan air yang jernih dan pohon yang rindang.',
            'gambar' => 'telaga1.jpg'
        ]
    ];

    return view('tiket.index', compact('tiket'));
}

}

