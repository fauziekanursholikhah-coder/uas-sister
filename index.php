<?php
include "koneksi.php";

$data = mysqli_query($conn,
"SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>

<h2>Data Mahasiswa</h2>

<a href="tambah.php">Tambah Data</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    <?php while($d = mysqli_fetch_array($data)){ ?>

    <tr>
        <td><?= $d['id'] ?></td>
        <td><?= $d['nama'] ?></td>
        <td><?= $d['jurusan'] ?></td>
        <td>
            <a href="edit.php?id=<?= $d['id'] ?>">Edit</a> |
            <a href="hapus.php?id=<?= $d['id'] ?>"
               onclick="return confirm('Hapus data?')">
               Hapus
            </a>
        </td>
    </tr>

    <?php } ?>

</table>

<br>

<a href="api/mahasiswa_get.php">Lihat Data JSON (API)</a>

</body>
</html>