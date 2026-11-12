<?php

include "../koneksi.php";
/** @var mysqli $conn */

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
$data = [];

$query = mysqli_query($conn,
"SELECT * FROM mahasiswa");

while($d = mysqli_fetch_assoc($query)){

    $data[] = $d;

}

header("Content-Type: application/json");

echo json_encode($data);

?>