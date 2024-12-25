<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form dan sanitasi
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email penerima (admin)
    $to = "alifputraharyanto@gmail.com"; // Ganti dengan alamat email admin Anda
    $subject = "Pesan Kontak dari $name";
    
    // Isi email
    $body = "Nama: $name\n";
    $body .= "Email: $email\n";
    $body .= "Pesan:\n$message\n";

    // Header email
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Pesan Anda telah dikirim!'); window.location.href='kontak.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.'); window.location.href='kontak.php';</script>";
    }
} else {
    // Jika tidak ada data yang dikirim
    echo "<script>alert('Permintaan tidak valid.'); window.location.href='kontak.php';</script>";
}
?>