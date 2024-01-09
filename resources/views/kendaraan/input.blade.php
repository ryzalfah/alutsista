<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/icons/icon.png')}}">
    <title>Alutsista Indonesia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="{{asset('assets/css/input.css')}}">
</head>

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
                        <a class="nav-link active" href="/kendaraan">Back</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- navbar end -->
<body>
<!-- form Section start -->
<form action="" method="POST" class="form" enctype="multipart/formdata">
    <div class="nama-alutsista">
      <label for="nama-alutsista">Nama Alutsista</label>
      <input type="text" class="form-control" id="nama-alutsista" name="nama-alutsista" placeholder="Nama alutsista">
    </div>

    <div class="nomor-seri">
      <label for="nomor-seri">Nomor Seri</label>
      <input type="text" class="form-control" id="nomor-seri" name="nomor-seri" placeholder="Nomor seri">
    </div>

    <div class="kapasitas">
      <label for="kapasitas">Kapasitas</label>
      <input type="text" class="form-control" id="kapasitas" name="kapasitas" placeholder="Kapasitas">
    </div>

    <div class="ukuran">
      <label for="ukuran">Ukuran</label>
      <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran">
    </div>

    <div class="berat">
      <label for="berat">Berat</label>
      <input type="text" class="form-control" id="berat" name="berat" placeholder="Berat">
    </div>

    <div class="daya-tembak">
      <label for="daya-tembak">Daya Tembak</label>
      <input type="text" class="form-control" id="daya-tembak" name="daya-tembak" placeholder="Daya tembak">
    </div>

    <div class="kecepatan">
      <label for="kecepatan">Kecepatan</label>
      <input type="text" class="form-control" id="kecepatan" name="kecepatan" placeholder="Kecepatan">
    </div>

    <div class="tambah-gambar">
      <label for="tambah-gambar">Tambahkan Gambar</label><br>
      <input type="file" class="form-control-file" id="tambah-gambar" name="tambah-gambar">
    </div>
    
    <div class="status-kondisi">
      <label for="status-kondisi">Status dan Kondisi</label>
      <input type="text" class="form-control" id="status-kondisi" name="status-kondisi" placeholder="Status dan kondisi">
    </div>

    <div class="pemilik-lokasi">
      <label for="pemilik-lokasi">Pemilik dan Lokasi</label>
      <input type="text" class="form-control" id="pemilik-lokasi" name="pemilik-lokasi" placeholder="Pemilik dan lokasi">
    </div>

    <div class="sejarah-pemeliharaan">
      <label for="sejarah-pemeliharaan">Sejarah dan Pemeliharaan</label>
      <input type="text" class="form-control" id="sejarah-pemeliharaan" name="sejarah-pemeliharaan" placeholder="Sejarah dan Pemeliharaan">
    </div>

    <div class="pemakaian-riwayat-operasi">
      <label for="pemakaian-riwayat-operasi">Pemakaian dan Riwayat Operasi</label>
      <input type="text" class="form-control" id="pemakaian-riwayat-operasi" name="pemakaian-riwayat-operasi" placeholder="Pemakaian dan riwayat operasi">
    </div>

        <button type="submit" class="btn btn-danger">Submit</button>
</form>
<!-- form Section end -->

<!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="credit">
            <p>Created by <a href="">PT.Bagus Karya</a>. | &copy; 2024.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>