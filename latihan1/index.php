<?php
// API mysqli untuk koneksi ke database
$mysqli = new mysqli("localhost", "root", "", "universitas_pasundan");

// ambil semua data dari database
$result = $mysqli->query("SELECT * FROM mahasiswa");
$rows = $result->fetch_all();

// konversi ke format JSON
$data_json = json_encode($rows);

// Tampilkan data JSON
echo $data_json;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST API</title>
</head>
<link rel="stylesheet" href="">

<body>

</body>

</html>