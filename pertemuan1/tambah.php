<?php 
require 'functions.php';
if (isset($_POST['submit'])) {
    if(tambah($_POST)>0){
        echo "<script>
        alert('data berhasil ditambahkan');
        document.location.href='latihan3.php';
        </script>";
    }else{
        "<script>
        alert('data gagal ditambahkan');
        </script>";
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
    ul {
        list-style: none;
    }
    </style>
</head>

<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" autofocus required>
                </label>
            </li>
            <li>
                <label>
                    NIM :
                    <input type="text" name="nim" required>
                </label>
            </li>
            <li>
                <label>
                    email :
                    <input type="text" name="email" required>
                </label>
            </li>
            <li>
                <label>
                    Jurusan :
                    <input type="text" name="jurusan" required>
                </label>
            </li>
            <li>
                <label>
                    Foto :
                    <input type="text" name="gambar" required>
                </label>
            </li>
            <li>
                <button type="submit" name="submit">submit</button>
            </li>
        </ul>
    </form>
</body>

</html>