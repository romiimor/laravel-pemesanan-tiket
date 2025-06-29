@extends('layouts.app')

@section('title', 'Tiket')

@section('content')
    <h1 class="text-center mb-4">Harga Tiket Wisata</h1>

    <div class="row justify-content-center">
        @foreach($tiket as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset('images/' . $item['gambar']) }}" class="card-img-top" alt="{{ $item['nama'] }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['nama'] }}</h5>
                        <p class="card-text">{{ $item['deskripsi'] }}</p>
                        <p class="card-text"><strong>Harga:</strong> {{ $item['harga'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
