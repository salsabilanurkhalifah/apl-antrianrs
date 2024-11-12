<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "rumahsakit";

 try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);

    $coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "koneksi berhasil";
 } catch(PDOException $e){

    echo "koneksi gagal:" . $e->getMessage();
 }
?>