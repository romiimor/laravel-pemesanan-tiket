{{-- resources/views/pembelian/index.blade.php --}}
@extends('layouts.app') {{-- Sesuaikan jika layout-nya berbeda --}}

@section('title', 'Beli Tiket')

@section('content')
<div class="container">
    

    {{-- Notifikasi error validasi --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Form pembelian --}}
    <div class="max-w-md mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Beli Tiket</h1>
    
        <form action="{{ route('pembelian.store') }}" method="POST" class="space-y-4">
            @csrf
    
            <div>
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" id="nama" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none">
            </div>
    
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none">
            </div>
    
            <div>
                <label for="tiket_wisata" class="block text-sm font-medium text-gray-700">Pilih Tiket Wisata</label>
                <select name="tiket_wisata" id="tiket_wisata" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm bg-white focus:ring focus:ring-blue-200 focus:outline-none">
                    <option value="">-- Pilih Tempat Wisata --</option>
                    <option value="Kolam Renang Cibulan">Kolam Renang Cibulan</option>
                    <option value="Gunung Ciremai">Gunung Ciremai</option>
                    <option value="Telaga Biru">Telaga Biru</option>
                    
                </select>
            </div>
    
            <div>
                <label for="jumlah_tiket" class="block text-sm font-medium text-gray-700">Jumlah Tiket</label>
                <input type="number" name="jumlah_tiket" id="jumlah_tiket" min="1" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:outline-none">
            </div>
    
            <div>
                <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 transition duration-200">
                </button>
            </div>
        </form>
    </div>    
</div>
@endsection
