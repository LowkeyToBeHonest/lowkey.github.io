<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        /* CSS untuk Navbar */
        .navbar {
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 24px;
        }
        .nav-link {
            font-size: 18px;
            transition: color 0.3s;
        }
        .nav-link:hover {
            color: #ffeb3b; /* Warna saat hover */
        }
        .navbar-toggler {
            border: none; /* Menghilangkan border pada tombol toggler */
        }
        .navbar-toggler-icon {
            background-color: white; /* Warna ikon toggler */
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
    <h2>Data Mahasiswa</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'conndb.php';
            $no = 1;
            $dtmhs = mysqli_query($conn, "SELECT * FROM tbmhs");
            while ($d = mysqli_fetch_array($dtmhs)) { ?> 
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($d['nim']); ?></td>
                    <td><?php echo htmlspecialchars($d['nama']); ?></td>
                    <td><?php echo htmlspecialchars($d['alamat']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<footer class="footer">
    <p>&copy; 2024 Universitas Muhammadiyah Palu. All rights reserved.</p>
</footer>

</body>
</html>