<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Pengaturan Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .content {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .profile-pic {
            width: 100px; /* Set width for profile picture */
            height: 100px; /* Set height for profile picture */
            border-radius: 50%; /* Make it circular */
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="content">
    <h1>Pengaturan Profil</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="profilePic">Foto Profil:</label>
            <div>
                <img src="path/to/current-profile-pic.jpg" alt="Current Profile Picture" class="profile-pic">
            </div>
            <input type="file" class="form-control-file" id="profilePic" name="profilePic" accept="image/*" required>
        </div>
        <div class="form-group">
            <label for="username">Nama Pengguna:</label>
            <input type="text" class="form-control" id="username" name="username" value="Current Username" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="current.email@example.com" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>

</body>
</html>