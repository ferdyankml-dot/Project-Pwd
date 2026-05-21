<?php
session_start();

if (!isset($_SESSION['login'])) {
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

if (isset($_POST['update'])) {
    $catalog = $_POST['catalog'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $query = mysqli_query($konek, "UPDATE menu SET catalog = '$catalog', harga = '$harga', keterangan = '$keterangan' WHERE idm = '$id'");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal update data";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container mt-5">
    <div class="box">
        <h2 class="mb-4">Edit Menu</h2>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Nama Menu</label>
                <input type="text" name="catalog" class="form-control" value="<?= $row['catalog']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="number" name="harga" class="form-control" value="<?= $row['harga']; ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <textarea name="keterangan" class="form-control" rows="3"><?= $row['keterangan']; ?></textarea>

            </div>

            <button type="submit" name="update" class="btn btn-dark">Update</button>
            <a href="index.php" class="btn btn-outline-dark mt-3">Kembali</a>

        </form>
    </div>
</div>

</body>

</html>