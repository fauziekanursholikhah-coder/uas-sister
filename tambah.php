<?php

include "koneksi.php";

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn,
    "INSERT INTO mahasiswa(nama,jurusan)
    VALUES('$nama','$jurusan')");

    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>

<h2>Tambah Mahasiswa</h2>

<form method="post">

    Nama:<br>
    <input type="text" name="nama" required>
    <br><br>

    Jurusan:<br>
    <input type="text" name="jurusan" required>
    <br><br>

    <button type="submit" name="simpan">
        Simpan
    </button>

</form>

<br>

<a href="index.php">Kembali</a>

</body>
</html>