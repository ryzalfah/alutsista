@extends('layouts.layouts')

@section('content')
 <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-logo" href="#">Alutsista<span>Indonesia</span>.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="d-flex" >
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/senjata">Senjata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/kendaraan">Kendaraan</a>
                    </li>
                </ul>
                @auth
                    <fron action="/logout" method="post">
                        @csrf
                        <button class="btn btn-danger"><a class="nav-link active">Logout</a></button>
                @else
                    <button class="btn btn-danger"><a class="nav-link active" href="/login">Masuk</a></button>
                @endauth
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- Hero Section start -->
    <section class="hero" id="home">
        <div class="container">
            <main class="content">
                <h1>Alutsista<span>Indonesia</span></h1>
                <p>Alat Utama Sistem Senjata Tentara Nasional Indonesia yang selanjutnya disebut Alutsista TNI adalah bagian dari Alpalhankam yang merupakan satu kesatuan sistem senjata secara terintegrasi atau bagian dari sistem senjata yang memiliki kemampuan
                    secara mandiri untuk digunakan dalam melaksanakan tugas pokok Tentara.</p>
            </main>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- Products Section start -->
    <section class="products" id="products">
        <h2><span>Koleksi</span>Kami</h2>
        <div class="row">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('assets/image/senjata/P3A_1.jpg')}}" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>P-3A Kal. 7.65 mm</h3>
                    <a href="senjata.php"><i data-feather="arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('assets/image/kendaraan/SampingDepanSized.jpg')}}" alt="Product 1">
                </div>
                <div class="product-content">
                    <h3>Anoa 6x6 Mortar</h3>
                    <a href="kendaraan.php"><i data-feather="arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </section>
<!-- Products Section end -->
@endsection