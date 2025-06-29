@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <h1 class="text-center">Selamat Datang Wisata kuningan</h1>
    <p class="text-center">Pesan tiket tempat wisata favoritmu dengan mudah!</p>

    <div class="text-center my-4">
        <a href="/tiket" class="btn btn-primary">Lihat Tiket</a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div id="cibulanCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/cibulan/cibulan1.jpg') }}" class="d-block w-100" alt="Cibulan 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/cibulan/cibulan2.jpg') }}" class="d-block w-100" alt="Cibulan 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/cibulan/cibulan3.jpg') }}" class="d-block w-100" alt="Cibulan 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#cibulanCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cibulanCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        
            <h4 class="mt-3">Kolam Renang Cibulan</h4>
            <p>Tempat wisata ini punya beberapa daya tarik, salah satunya ada keberadaan ikan dewa yang turut jadi maskot Objek Wisata Cibulan. Ikan dewa sendiri adalah ikan endemi yang disakralkan oleh masyarakat setempat.</p>
        </div>
        
        <div class="col-md-4">
            <div id="ceremaiCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/ceremai/ceremai1.jpg') }}" class="d-block w-100" alt="Ceremai 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/ceremai/ceremai2.jpg') }}" class="d-block w-100" alt="Ceremai 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/ceremai/ceremai3.jpg') }}" class="d-block w-100" alt="Ceremai 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#cibulanCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cibulanCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
            
            <h4>Gunung ciremai</h4>
            <p>Gunung Ciremai adalah tujuan populer untuk pendakian di Jawa Barat, dengan beberapa jalur yang tersedia, termasuk jalur Linggarjati, Palutungan, dan Apuy. Jalur Linggarjati terkenal dengan medan yang relatif mudah dan cocok untuk pendaki pemula, sementara jalur Apuy lebih menantang dengan tanjakan terjal. Jalur Palutungan dikenal dengan keindahan panorama alam.</p>
        </div>

        <div class="col-md-4">
            <div id="telagaCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/telaga/telaga1.jpg') }}" class="d-block w-100" alt="Telaga 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/telaga/telaga2.jpg') }}" class="d-block w-100" alt="Telaga 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/telaga/telaga3.jpg') }}" class="d-block w-100" alt="Telaga 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#cibulanCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cibulanCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>
            <h4>Telaga Biru</h4>
            <p>Telaga Biru Cicerem memiliki keindahan dengan air yang bening dan dikelilingi pohon yang membuat terlihat hijau. adanya ayunan di atas telaga membuat lebih menarik untuk menjadi objek wisata.</p>
        </div>
    </div>
@endsection
