<?php 
require 'functions.php';

// ambil id dari URL
$id=$_GET['id']; 

// query data berdasrkan id
$mahasiswa=query("SELECT *FROM mahasiswa WHERE id=$id");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <style>
    ul {
        list-style: none;
    }
    </style>
</head>

<body>
    <h3>Detail Mahasiswa</h3>
    <ul>
        <li><img src="../img/<?= $mahasiswa["gambar"]; ?>" width="300px"></li>
        <li><?= $mahasiswa["nim"]; ?></li>
        <li><?= $mahasiswa["nama"]; ?></li>
        <li><?= $mahasiswa["email"]; ?></li>
        <li><?= $mahasiswa["jurusan"]; ?></li>
        <li><a href="">edit</a> | <a href="">hapus</a></li>
        <li><a href="latihan3.php">Kembali Ke Halaman Awal</a></li>
    </ul>
</body>

</html>