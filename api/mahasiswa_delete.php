<?php

include "../koneksi.php";
/** @var mysqli $conn */

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
$id = $_POST['id'];

mysqli_query($conn,
"DELETE FROM mahasiswa
WHERE id='$id'");

echo json_encode([
    "status" => "hapus berhasil"
]);

?>