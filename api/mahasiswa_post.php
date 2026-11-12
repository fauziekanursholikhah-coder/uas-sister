<?php

include "../koneksi.php";
/** @var mysqli $conn */

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");

$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

mysqli_query($conn,"
INSERT INTO mahasiswa(nama, jurusan)
VALUES('$nama', '$jurusan')
");

echo json_encode([
    "status" => "berhasil"
]);

?>