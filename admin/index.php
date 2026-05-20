<?php
session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require_once __DIR__ . '/koneksi.php';

// 1. Query ambil data menu
$menu = mysqli_query($konek, "SELECT * FROM menu");

// 2. Query ambil data pesanan (Diurutkan dari yang terbaru berdasarkan ID)
// $pesanan = mysqli_query($konek, "SELECT * FROM pemesanan ORDER BY id DESC");
// Yang lama: SELECT * FROM pemesanan ORDER BY id DESC
$pesanan = mysqli_query($konek, "SELECT * FROM pemesanan WHERE status = 'Pending' ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <span class="text-white">
                ADMIN DASHBOARD
            </span>
            <a href="logout.php" class="navbar-brand text-white">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>
        </div>
    </nav>

    <div class="container my-5">

        <div class="row">

            <div class="col-md-6">

                <div class="box">

                    <div class="menu-title">
                        <h3>MENU</h3>
                        <a href="tambah_menu.php">
                            <button class="btn btn-dark btn-add">+</button>
                        </a>
                    </div>

                    <?php while ($row = mysqli_fetch_assoc($menu)) { ?>

                        <div class="row catalog-item align-items-center">

                            <div class="col-md-8">
                                <h5>KODE <?= $row['idm']; ?></h5>
                                <p><?= strtoupper($row['catalog']); ?></p>
                                <p class="price">Rp <?= number_format($row['harga'], 0, ',', '.'); ?></p>
                            </div>

                            <div class="col-md-4 action-btns">
                                <a href="detail_menu.php?id=<?= $row['idm']; ?>" class="btn btn-dark btn-sm">Detail</a>
                                <a href="edit_menu.php?id=<?= $row['idm']; ?>" class="btn btn-outline-dark btn-sm">Edit</a>
                                <a href="hapus_menu.php?id=<?= $row['idm']; ?>" class="btn btn-outline-dark btn-sm" onclick="return confirm('Yakin ingin menghapus data?')">Delete</a>
                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>

            <div class="col-md-6">

                <div class="box">

                    <h3 class="text-center mb-4">PESANAN</h3>

                    <?php if (mysqli_num_rows($pesanan) > 0) { ?>
                        <?php while ($row_pesanan = mysqli_fetch_assoc($pesanan)) { ?>

                            <div class="row order-item align-items-center mb-3">

                                <div class="col-md-8">
                                    <h5>ID <?= $row_pesanan['id']; ?></h5>
                                    <p><?= strtoupper($row_pesanan['namap']); ?></p>
                                </div>

                                <div class="col-md-4 action-btns">
                                    <a href="detail_pesanan.php?id=<?= $row_pesanan['id']; ?>" class="btn btn-dark btn-sm">
                                        Detail
                                    </a>
                                    <a href="konfirmasi_pesanan.php?id=<?= $row_pesanan['id']; ?>" class="btn btn-outline-dark btn-sm">
                                        Konfirmasi
                                    </a>
                                </div>

                            </div>

                        <?php } ?>
                    <?php } else { ?>
                        <div class="text-center text-muted py-4">Belum ada pesanan masuk.</div>
                    <?php } ?>

                </div>

            </div>

        </div>

    </div>

    <script src="script.js"></script>

</body>

</html>