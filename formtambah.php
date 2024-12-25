<?php
// Sertakan koneksi database
include 'conndb.php';

// Periksa apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan sanitasi
    $nim = htmlspecialchars(trim($_POST['nim']));
    $nama = htmlspecialchars(trim($_POST['nama']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));

    // Siapkan pernyataan SQL untuk menambahkan data
    $query = "INSERT INTO tbmhs (nim, nama, alamat) VALUES (?, ?, ?)";
    
    // Inisialisasi pernyataan
    if ($stmt = mysqli_prepare($conn, $query)) {
        // Ikat parameter
        mysqli_stmt_bind_param($stmt, "sss", $nim, $nama, $alamat);
        
        // Eksekusi pernyataan
        if (mysqli_stmt_execute($stmt)) {
            // Data berhasil ditambahkan
            echo "<script>window.location.href = '/ti2023/indexxx.php';</script>";
            exit();
        } else {
            // Kesalahan saat mengeksekusi pernyataan
            echo "Kesalahan saat menambahkan data: " . mysqli_error($conn);
        }
        
        // Tutup pernyataan
        mysqli_stmt_close($stmt);
    } else {
        // Kesalahan saat menyiapkan pernyataan
        echo "Kesalahan saat menyiapkan pernyataan: " . mysqli_error($conn);
    }
}

// Tutup koneksi database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
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

<div class="container">
    <h2>Tambah Data Mahasiswa</h2>

    <form method="POST" action="">
        <div class="form-group">
            <label for="nim">NIM</label>
            <input type="text" class="form-control" id="nim" name="nim" required >
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block">Tambah Data</button>
    </form>
</div>

<div class="footer">
    &copy; 2024 Lowkey. All rights reserved.
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>