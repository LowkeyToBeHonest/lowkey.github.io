<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome -->
    <title>Beranda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: -250px; /* Hide sidebar off-screen */
            background-color: #2196F3;
            padding-top: 20px;
            transition: left 0.3s; /* Smooth transition */
            z-index: 1000; /* Ensure sidebar is above other content */
        }
        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #21CBF3;
        }
        .content {
            margin-left: 260px; /* Space for the sidebar */
            padding: 20px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }
        .social-icons {
            margin-top: 10px;
        }
        .social-icons a {
            color: #777;
            margin: 0 10px;
            font-size: 20px;
            transition: color 0.3s;
        }
        .social-icons a:hover {
            color: #2196F3; /* Change color on hover */
        }
        .collapse {
            background-color: #1E88E5; /* Background color for dropdown */
        }
        .collapse a {
            padding-left: 30px; /* Indent dropdown items */
            color: white; /* Dropdown item text color */
        }
        .toggle-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1000; /* Ensure button is above other content */
        }
        .welcome-message {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: none; /* Hidden by default */
            z-index: 900; /* Below the sidebar */
        }
        .profile-link {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1000; /* Ensure it is above other content */
            color: #2196F3; /* Profile link color */
            font-size: 18px;
            text-decoration: none;
        }
        .profile-pic {
            width: 40px; /* Set width for profile picture */
            height: 40px; /* Set height for profile picture */
            border-radius: 50%; /* Make it circular */
            cursor: pointer; /* Change cursor to pointer */
        }
    </style>
</head>
<body>

<!-- Button to toggle sidebar -->
<button class="btn btn-primary toggle-btn" id="toggleButton" onclick="toggleSidebar()">☰</button>

<!-- Profile link -->
<a href="setting.php" class="profile-link">
    <img src="path/to/profile-pic.jpg" alt="Profile Picture" class="profile-pic" onclick="openProfileSettings()">
</a>

<!-- Overlay for sidebar -->
<div class="overlay" id="overlay" onclick="closeSidebar()"></div>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <a href="beranda.php">Beranda</a>
    <a href="javascript:void(0)" onclick="toggleLayananOptions()">Layanan</a>
    <div class="collapse" id="layananOptions" style="display: none;">
        <a href="layanan1.php">Layanan 1</a>
        <a href="layanan2.php">Layanan 2</a>
    </div>
    <a href="kontak.php">Kontak</a>
</div>

<!-- Main content -->
<div class="content">
    <div class="welcome-message">
        <h1>Selamat Datang di Website Lowkey</h1>
        <p>Ini adalah halaman beranda. Anda dapat menemukan informasi lebih lanjut di menu navigasi.</p>
    </div>
</div>

<!-- Footer -->
<div class="footer">
    <p>&copy; 2024 Lowkey. CopyRight.</p>
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank" class="fab fa-facebook-f"></a>
        <a href="https://www.twitter.com" target="_blank" class="fab fa-twitter"></a>
        <a href="https://www.instagram.com/666_forgotten" target="_blank" class="fab fa-instagram"></a>
        <a href="https://www.linkedin.com" target="_blank" class="fab fa-linkedin-in"></a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        if (sidebar.style.left === '0px') {
            sidebar.style.left = '-250px';
            overlay.style.display = 'none';
        } else {
            sidebar.style.left = '0px';
            overlay.style.display = 'block';
        }
    }

    function closeSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        sidebar.style.left = '-250px';
        overlay.style.display = 'none';
    }

    function toggleLayananOptions() {
        const options = document.getElementById('layananOptions');
        options.style.display = options.style.display === 'none' ? 'block' : 'none';
    }

    function openProfileSettings() {
        window.location.href = 'setting.php';
    }
</script>

</body>
</html>