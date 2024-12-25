<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Layanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .card {
            margin: 15px 0;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background: linear-gradient(to right, #2196F3, #21CBF3);">
    <a class="navbar-brand" href="beranda.php" style="color: white;">Situs Kami</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="beranda.php" style="color: white;">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tentang.php" style="color: white;">Tentang Kami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="layanan.php" style="color: white;">Layanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="kontak.php" style="color: white;">Kontak</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-4">
    <h1>Layanan Kami</h1>
    <p>Pilih salah satu opsi di bawah ini:</p>
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tambah Data Mahasiswa</h5>
                    <p class="card-text">Klik di bawah ini untuk menambah data mahasiswa baru ke dalam sistem.</p>
                    <a href="/ti2023/formtambah.php" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Tampilkan Data Mahasiswa</h5>
                    <p class="card-text">Klik di bawah ini untuk melihat daftar mahasiswa yang terdaftar.</p>
                    <a href="/ti2023/indexxx.php" class="btn btn-primary">Tampilkan Data</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Edit Data Mahasiswa</h5>
                    <p class="card-text">Klik di bawah ini untuk memilih mahasiswa yang ingin diedit.</p>
                    <a href="/ti2023/pilih_edit.php" class="btn btn-primary">Edit Data</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Hapus Data Mahasiswa</h5>
                    <p class="card-text">Klik di bawah ini untuk memilih mahasiswa yang ingin dihapus.</p>
                    <a href="/ti2023/hapus.php" class="btn btn-danger">Hapus Data</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <p>&copy; 2024 Universitas Muhammadiyah Palu. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>