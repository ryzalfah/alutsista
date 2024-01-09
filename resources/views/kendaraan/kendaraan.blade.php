@extends('layouts.layouts')
<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-logo" href="#">Alutsista<span>Indonesia</span>.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="d-flex">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/kendaraan/input">Tambah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/kendaraan/pinjam">Peminjaman</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<!-- navbar end -->
@section('content')
<!-- Hero Section start -->
    <section class="hero" id="home">
        <div class="container">
            <main class="content">
                <h1>Kendaraan<span>Tempur</span></h1>
            </main>
        </div>
    </section>
<!-- Hero Section end -->
    
@endsection