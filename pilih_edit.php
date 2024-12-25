<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pilih Mahasiswa untuk Edit</title>
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
    <h1>Pilih Mahasiswa untuk Diedit</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conndb.php'; // Pastikan koneksi database sudah benar
            $dtmhs = mysqli_query($conn, "SELECT * FROM tbmhs");
            while ($d = mysqli_fetch_array($dtmhs)) { ?> 
                <tr>
                    <td><?php echo htmlspecialchars($d['nim']); ?></td>
                    <td><?php echo htmlspecialchars($d['nama']); ?></td>
                    <td><?php echo htmlspecialchars($d['alamat']); ?></td>
                    <td>
                        <a href="/ti2023/formedit.php?id=<?php echo $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<footer class="footer">
    <p>&copy; 2024 Universitas Muhammadiyah Palu. All rights reserved.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>