<?php
include '../lib/koneksi.php';

$sql = "SELECT * FROM antrian ORDER BY id DESC;";
$stmt = $conn->prepare($sql);
$stmt->execute();

echo "<h2>Daftar Antrian Pasien</h2>";

// Menambahkan CSS untuk desain tabel
echo "<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border: 1px solid #f2a0a1; /* Warna border tabel */
    }
    th {
        background-color: #ff80bf; /* Warna latar belakang header */
        color: white; /* Warna teks header */
    }
    tr:nth-child(even) {
        background-color: #fce4ec; /* Warna latar belakang baris genap */
    }
    tr:nth-child(odd) {
        background-color: #ffe6f1; /* Warna latar belakang baris ganjil */
    }
    a {
        color: #d81b60; /* Warna link */
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
    .button-back {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #ff4d94; /* Warna tombol pink cerah */
        color: white;
        font-size: 16px;
        text-align: center;
        border-radius: 5px;
        text-decoration: none;
    }
    .button-back:hover {
        background-color: #ff3385; /* Warna tombol saat hover */
    }
</style>";

echo "<table>
<tr>
<th>No</th>
<th>Nama Pasien</th>
<th>Nomor Antrian</th>
<th>Waktu Kedatangan</th>
<th>Status</th>
<th>Aksi</th>
</tr>";

$antrian = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (count($antrian) > 0) {
    $no = 1;
    foreach($antrian as $row){
        echo "<tr>
        <td>".$no."</td>
        <td>".$row["nama_pasien"]."</td>
        <td>".$row["nomor_antrian"]."</td>
        <td>".$row["waktu_kedatangan"]."</td>
        <td>".$row["status"]."</td>
        <td><a href='ubah_status.php?id=".$row["id"]."'>Ubah Status</a> | <a href='hapus_antrian.php?id=".$row["id"]."'>Hapus</a></td>
        </tr>";
        $no++;
    }
    echo "</table>";
} else {
    echo "Tidak ada antrian.";
}

// Menambahkan tombol "Kembali ke Dashboard"
echo "<a href='../index.php' class='button-back'>Kembali ke Dashboard</a>";

$conn = null; // Menutup koneksi PDO
?>
