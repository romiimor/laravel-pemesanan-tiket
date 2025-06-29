@extends('layouts.app')

@section('title', 'Struk Pembelian')

@section('content')
<div class="container">
    <h2>Struk Tiket</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ $pembelian->nama }}</li>
        <li class="list-group-item"><strong>Email:</strong> {{ $pembelian->email }}</li>
        <li class="list-group-item"><strong>Jumlah Tiket:</strong> {{ $pembelian->jumlah_tiket }}</li>
        <li class="list-group-item"><strong>Kode Booking:</strong> 
            <span class="text-success">{{ $pembelian->kode_booking }}</span>
        </li>
    </ul>

    @php
        $pesan = "Halo Admin, saya sudah booking tiket dengan:\n"
               . "Nama: $pembelian->nama\n"
               . "Email: $pembelian->email\n"
               . "Jumlah Tiket: $pembelian->jumlah_tiket\n"
               . "Kode Booking: $pembelian->kode_booking";
    @endphp

    <a 
        href="https://wa.me/6287738401850?text={{ urlencode($pesan) }}"
        target="_blank"
        class="btn btn-success mt-4">
        Kirim via WhatsApp
    </a>
</div>
@endsection
