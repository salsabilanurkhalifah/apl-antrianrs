<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS.salsa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: #f8e0f7; /* Latar belakang halaman pink muda */
        }

        .sidebar {
            width: 250px;
            background-color: #ff4d94; /* Sidebar berwarna pink cerah */
            padding: 20px;
            color: #fff;
        }

        .sidebar h2 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li {
            margin: 15px 0;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            display: block;
            transition: background-color 0.3s;
            padding: 10px;
            border-radius: 4px;
        }

        .sidebar ul li a:hover {
            background-color: #ee6a50; /* Hover effect dengan warna lebih gelap */
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .content h1 {
            color: #d81b60; /* Warna teks judul pink gelap */
            margin-bottom: 20px;
        }

        .cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            width: 250px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: transform 0.3s;
            border: 1px solid #f8b4d9; /* Border card dengan warna pink lembut */
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            color: #ff4d94; /* Warna teks judul card pink cerah */
            margin-bottom: 10px;
        }

        .card p {
            color: #666;
        }

        .button-back {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #ff3385; /* Warna tombol pink cerah */
            color: white;
            font-size: 16px;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .button-back:hover {
            background-color: #d81b60; /* Warna tombol saat hover */
        }

    </style>
</head>
<body>

<div class="sidebar">
    <h2>Rumah Sakit</h2>
    <ul>
        <li><a href="#">Dashboard</a></li>
        <li><a href="modul/tambah_antrian.php">Daftar</a></li>
        <li><a href="modul/daftar_antrian.php">Status antrian</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>

<div class="content">
   <center> <h1>Selamat Datang di RS.Harapan Salsabila</h1></center>
  

</div>

</body>
</html>
