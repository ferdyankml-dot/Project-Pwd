<?php
session_start();

if(!isset($_SESSION['login'])){

    header("Location: login.php");
    exit;

}
require_once __DIR__ . '/koneksi.php';

if (!isset($_GET['id'])) {

    echo "ID tidak ditemukan";
    exit;

}

$id = $_GET['id'];

$data = mysqli_query($konek, "SELECT * FROM menu WHERE idm = '$id'");

$row = mysqli_fetch_assoc($data);

if (!$row) {

    echo "Data tidak ditemukan";
    exit;

}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">

    <div class="box">

        <h2 class="mb-4">
            Detail Menu
        </h2>

        <h5>ID Menu</h5>

        <p>
            <?= $row['idm']; ?>
        </p>

        <hr>

        <h5>Nama Menu</h5>

        <p>
            <?= $row['catalog']; ?>
        </p>

        <hr>

        <h5>Harga Menu</h5>

        <p>
            Rp <?= number_format($row['harga']); ?>
        </p>

        <hr>

        <h5>Keterangan</h5>

        <p>
            <?= $row['keterangan']; ?>
        </p>

        <a 
            href="index.php"
            class="btn btn-dark">

            Kembali

        </a>

    </div>

</div>

</body>
</html>