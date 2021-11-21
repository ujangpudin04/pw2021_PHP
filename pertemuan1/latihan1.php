<?php 

// konek db
$conn=mysqli_connect("localhost","root","","phpdasar");

// query db
$result=mysqli_query($conn,'SELECT * FROM mahasiswa');
// var_dump($result); 

//ubah data kedalam array
$rows=[];
while($row=mysqli_fetch_assoc($result)){
    $rows[]=$row;
}
// var_dump($rows)

//tampung variabel mhs
$mahasiswa=$rows;

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
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>

        <?php $i=1; foreach ($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><img src="./img/<?= $mhs["gambar"]; ?>" width="50px"></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["email"]; ?></td>
            <td><?= $mhs["jurusan"]; ?></td>
            <td><a href="" target="_blank">ubah</a> | <a href="" target="_blank">hapus</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>