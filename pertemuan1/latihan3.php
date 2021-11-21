<?php 
require 'functions.php';
$mahasiswa=query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0 phpp">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1; foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="../belajarphp/img/<?= $mhs["gambar"]; ?>" width="50px"></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>