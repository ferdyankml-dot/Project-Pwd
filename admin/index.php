<?php
session_start();

if(!isset($_SESSION['login'])){

    header("Location: login.php");
    exit;

}
require_once __DIR__ . '/koneksi.php';

$menu = mysqli_query($konek, "SELECT * FROM menu");
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
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

    <div class="container">

        <div class="row">

            <!-- MENU -->
            <div class="col-md-6">

                <div class="box">

                    <div class="menu-title">

                        <h3>MENU</h3>
                        <a href="tambah_menu.php">
                            <button class="btn btn-dark btn-add">
                                +
                            </button>
                        </a>
                    </div>

                    <!-- ITEM -->
                    <?php while ($row = mysqli_fetch_assoc($menu)) { ?>

                        <!-- ITEM -->
                        <div class="row catalog-item align-items-center">

                            <div class="col-md-8">

                                <h5>
                                    KODE <?= $row['idm']; ?>
                                </h5>

                                <p>
                                    <?= strtoupper($row['catalog']); ?>
                                </p>

                                <p class="price">
                                    Rp <?= number_format($row['harga']); ?>
                                </p>

                            </div>

                            <div class="col-md-4 action-btns">
                                <a
                                    href="detail_menu.php?id=<?= $row['idm']; ?>"
                                    class="btn btn-dark btn-sm">

                                    Detail

                                </a>
                                <a
                                    href="edit_menu.php?id=<?= $row['idm']; ?>"
                                    class="btn btn-outline-dark btn-sm">

                                    Edit

                                </a>
                                <a
                                    href="hapus_menu.php?id=<?= $row['idm']; ?>"
                                    class="btn btn-outline-dark btn-sm"
                                    onclick="return confirm('Yakin ingin menghapus data?')">

                                    Delete

                                </a>

                            </div>

                        </div>

                    <?php } ?>

                </div>

            </div>

            <!-- PESANAN -->
            <div class="col-md-6">

                <div class="box">

                    <h3 class="text-center mb-4">
                        PESANAN
                    </h3>

                    <div class="row order-item align-items-center">

                        <div class="col-md-8">

                            <h5>ID 01</h5>

                            <p>FERDYAN</p>

                        </div>

                        <div class="col-md-4 action-btns">

                            <a
                                href="detail_pesanan.php"
                                class="btn btn-dark btn-sm">

                                Detail

                            </a>

                            <button
                                class="btn btn-outline-dark btn-sm"
                                id="statusBtn">

                                Konfirmasi

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="script.js"></script>

</body>

</html>