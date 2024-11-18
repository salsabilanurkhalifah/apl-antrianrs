<?php
include 'lib/koneksi.php'; // Pastikan file koneksi sudah benar

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash password menggunakan password_hash() untuk keamanan
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Menyiapkan SQL untuk memasukkan data
    $sql = "INSERT INTO tbuser (username, password) VALUES (:username, :password)";
    $stmt = $conn->prepare($sql);
    
    // Bind parameter untuk menghindari SQL injection
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);

    // Mengeksekusi perintah
    if ($stmt->execute()) {
        // Redirect ke halaman login jika berhasil
        header("Location: login.php"); 
        exit;  // Pastikan untuk menghentikan eksekusi lebih lanjut
    } else {
        echo "<div class='error-message'>Error: Gagal menambahkan data.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <style>
        /* Gaya CSS tetap sama dengan yang sebelumnya */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #fce4ec; /* Latar belakang halaman warna pink muda */
        }

        .login-container {
            width: 300px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #d81b60; /* Warna judul pink gelap */
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-weight: bold;
            color: #d81b60; /* Warna label pink gelap */
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #f8b4d9; /* Border pink muda */
            border-radius: 4px;
            background-color: #ffe6f2; /* Latar belakang input pink lembut */
        }

        .input-group input:focus {
            outline: none;
            border-color: #ff3385; /* Border berubah menjadi pink cerah saat fokus */
            background-color: #fff; /* Warna latar belakang putih saat fokus */
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #ff3385; /* Tombol warna pink cerah */
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-btn:hover {
            background-color: #d81b60; /* Tombol hover dengan warna pink gelap */
        }

        .error-message {
            color: #d81b60; /* Warna pesan error pink gelap */
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Buat Akun Baru</h2>
    <?php if (isset($error)) { echo "<div class='error-message'>$error</div>"; } ?>
    <form action="register.php" method="POST"> <!-- Pastikan form mengarah ke register.php -->
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" name="btn" class="login-btn">Daftar</button>
    </form>
</div>

</body>
</html>
