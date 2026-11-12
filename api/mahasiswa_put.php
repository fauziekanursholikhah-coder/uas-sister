<?php

include "../koneksi.php";
/** @var mysqli $conn */

$id = $_POST['id'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($conn, "
UPDATE mahasiswa
SET
    nama = '$nama',
    jurusan = '$jurusan'
WHERE id = '$id'
");

if ($query) {

    if (mysqli_affected_rows($conn) > 0) {

        echo json_encode([
            "status" => "update berhasil"
        ]);

    } else {

        echo json_encode([
            "status" => "tidak ada data yang diubah"
        ]);

    }

} else {

    echo json_encode([
        "status" => "gagal",
        "error" => mysqli_error($conn)
    ]);

}

?>