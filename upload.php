<?php
// Mulai sesi
session_start();

// Cek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil data dari form
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Menangani upload file
    if (isset($_FILES['profilePic']) && $_FILES['profilePic']['error'] == 0) {
        // Tentukan direktori untuk menyimpan gambar
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["profilePic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Cek apakah file gambar adalah gambar sebenarnya
        $check = getimagesize($_FILES["profilePic"]["tmp_name"]);
        if ($check !== false) {
            echo " " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.";
            $uploadOk = 0;
        }

        // Cek ukuran file
        if ($_FILES["profilePic"]["size"] > 15728640) { // 500KB
            echo "Maaf, ukuran file terlalu besar.";
            $uploadOk = 0;
        }

        // Cek format file
        if (!in_array($imageFileType, ['jpg', 'png', 'jpeg', 'gif'])) {
            echo "Maaf, hanya file JPG, JPEG, PNG & GIF yang diperbolehkan.";
            $uploadOk = 0;
        }

        // Cek apakah $uploadOk diatur ke 0 oleh kesalahan
        if ($uploadOk == 0) {
            echo "Maaf, file tidak dapat diunggah.";
        } else {
            // Jika semua cek lolos, coba unggah file
            if (move_uploaded_file($_FILES["profilePic"]["tmp_name"], $targetFile)) {
                // File berhasil diunggah
                // Simpan informasi pengguna ke database (kode untuk koneksi dan query database harus ditambahkan di sini)
                // Contoh: updateUser Profile($username, $email, $targetFile);
                
                // Redirect ke beranda.php
                header("Location: beranda.php");
                exit(); // Pastikan untuk keluar setelah redirect
            } else {
                echo "Maaf, terjadi kesalahan saat mengunggah file.";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah atau terjadi kesalahan.";
    }
} else {
    echo "Permintaan tidak valid.";
}
?>