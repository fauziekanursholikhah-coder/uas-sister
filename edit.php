<?php

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM mahasiswa WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    mysqli_query($conn,
    "UPDATE mahasiswa
    SET nama='$nama',
        jurusan='$jurusan'
    WHERE id='$id'");

    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>

<h2>Edit Mahasiswa</h2>

<form method="post">

    Nama:<br>
    <input
        type="text"
        name="nama"
        value="<?= $d['nama'] ?>"
        required>
    <br><br>

    Jurusan:<br>
    <input
        type="text"
        name="jurusan"
        value="<?= $d['jurusan'] ?>"
        required>
    <br><br>

    <button type="submit" name="update">
        Update
    </button>

</form>

<br>

<a href="index.php">Kembali</a>

</body>
</html>