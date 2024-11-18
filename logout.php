<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['id'])) {
    // Jika belum login, arahkan kembali ke halaman login
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fce4ec; /* Warna latar belakang pink muda */
        }

        .dashboard-container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .dashboard-header {
            background-color: #d81b60; /* Warna header pink gelap */
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }

        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ff3385;
            color: white;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #d81b60;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="dashboard-header">
        <h1>Welcome to Dashboard</h1>
        <p>Welcome, <?php echo $_SESSION['id']; ?>! You are logged in.</p>
    </div>

    <a href="logout.php" class="logout-btn">Logout</a>
</div>

</body>
</html>
