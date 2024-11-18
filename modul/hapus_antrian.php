<?php
include '../lib/koneksi.php';
if (isset($_GET['id'])) {
$id = $_GET['id'];
$sql = "DELETE FROM antrian WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
if ($stmt->execute()) {
echo "Status pasien berhasil diubah menjadi Selesai!";
} else {
echo "Error: Gagal mengubah status.";
}
}
$conn = null;
?>

