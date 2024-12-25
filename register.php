<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username database Anda jika berbeda
$password = ""; // Ganti dengan password database Anda jika ada
$dbname = "user_management"; // Nama database yang telah dibuat

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses pendaftaran
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];

    // Hash password
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Simpan ke database tanpa NIM dan Email
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $newUsername, $hashedPassword);
    if ($stmt->execute()) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pendaftaran</title>
    <style>
        body {
            background-color: #f4f4f4;
        }
        .register-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .register-header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2 class="register-header">Pendaftaran</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="new_username">Username</label>
            <input type="text" class="form-control" id="new_username" name="new_username" placeholder="Masukkan username" required>
        </div>
        <div class="form-group">
            <label for="new_password">Password</label>
            <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Masukkan password" required>
        </div>
        <button type="submit" name="register" class="btn btn-success btn-block">Daftar</button>
    </form>
    
    <p class="text-center mt-3">Sudah punya akun? <a href="login.php">Login di sini</a></p>
</div>

</body>
</html>