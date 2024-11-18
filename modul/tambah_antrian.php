<?php
include '../lib/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pasien = $_POST['nama_pasien'];
    $nomor_antrin = $_POST['nomor_antrian'];
    $waktu_kedatangan = $_POST['waktu_kedatangan'];

    // Menyiapkan SQL untuk memasukkan data
    $sql = "INSERT INTO antrian (nama_pasien, nomor_antrian, waktu_kedatangan) VALUES (:nama_pasien, :nomor_antrian, :waktu_kedatangan)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nama_pasien', $nama_pasien);
    $stmt->bindParam(':nomor_antrian', $nomor_antrin);
    $stmt->bindParam(':waktu_kedatangan', $waktu_kedatangan);

    // Mengeksekusi perintah
    if ($stmt->execute()) {
        // Redirect ke halaman daftar antrian jika berhasil
        header("Location: daftar_antrian.php");
        exit;  // Pastikan untuk menghentikan eksekusi lebih lanjut
    } else {
        echo "<div class='message'>Error: Gagal menambahkan data.</div>";
    }
}
?>

<!-- Formulir untuk menambahkan antrian -->
<form method="POST" action="tambah_antrian.php" class="form-container">
    <h2>Tambah Antrian Pasien</h2>
    <label for="nama_pasien">Nama Pasien:</label>
    <input type="text" name="nama_pasien" required><br>

    <label for="nomor_antrian">Nomor Antrian:</label>
    <input type="number" name="nomor_antrian" required><br>

    <label for="waktu_kedatangan">Waktu Kedatangan:</label>
    <input type="datetime-local" name="waktu_kedatangan" required><br>

    <input type="submit" value="Tambah Antrian" class="submit-btn">
</form>

<!-- Styling CSS -->
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8e0f7; /* Latar belakang halaman pink muda */
        margin: 0;
        padding: 0;
    }

    .form-container {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        background-color: #ffb6d1; /* Latar belakang form pink lembut */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #d81b60; /* Warna judul pink gelap */
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #d81b60;
    }

    input[type="text"],
    input[type="number"],
    input[type="datetime-local"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #f8b4d9; /* Border pink muda */
        border-radius: 5px;
        background-color: #fff;
        font-size: 14px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #ff4d94; /* Tombol warna pink cerah */
        border: none;
        color: white;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #ff3385; /* Warna tombol saat hover */
    }

    .message {
        text-align: center;
        color: #d81b60;
        font-weight: bold;
        margin: 20px 0;
    }
</style>
