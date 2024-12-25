<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Hapus Mahasiswa</title>
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
    <h1>Pilih Mahasiswa untuk Dihapus</h1>
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
                        <a href="javascript:void(0)" onclick="confirmDelete('<?php echo $d['id']; ?>')" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data mahasiswa ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class ="btn btn-danger" id="confirmDeleteButton">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    let deleteId;

    function confirmDelete(id) {
        deleteId = id; // Store the ID to be deleted
        $('#confirmDeleteModal').modal('show'); // Show the modal
    }

    document.getElementById('confirmDeleteButton').addEventListener('click', function() {
        window.location.href = 'proses_hapus.php?id=' + deleteId; // Redirect to the delete process
    });
</script>

<div class="footer">
    <p>&copy; 2024 Situs Kami. All rights reserved.</p>
</div>

</body>
</html>