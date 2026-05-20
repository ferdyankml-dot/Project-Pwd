<?php
session_start();

// Proteksi halaman admin
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/koneksi.php';

// Ambil ID pesanan dari URL (GET)
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('ID Pesanan tidak ditemukan!'); window.location.href = 'index.php';</script>";
    exit;
}

$id_pesanan = mysqli_real_escape_string($konek, $_GET['id']);

// Query JOIN untuk mengambil data pemesanan, nama menu, dan bukti pembayaran sekaligus
$query = "SELECT pemesanan.*, menu.catalog, menu.harga, pembayaran.total AS total_bayar, pembayaran.bukti 
          FROM pemesanan 
          LEFT JOIN menu ON pemesanan.idm = menu.idm 
          LEFT JOIN pembayaran ON pemesanan.id = pembayaran.id 
          WHERE pemesanan.id = '$id_pesanan'";

$result = mysqli_query($konek, $query);
$data = mysqli_fetch_assoc($result);

// Jika data pesanan tidak ada di database
if (!$data) {
    echo "<script>alert('Data pesanan tidak ditemukan!'); window.location.href = 'index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan #<?= $data['id']; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5 mb-5">

        <div class="box">

            <h2 class="mb-4">
                Detail Pesanan #<?= $data['id']; ?>
            </h2>

            <h5>Atas Nama Pembeli</h5>
            <p><?= strtoupper($data['namap']); ?></p>

            <hr>

            <h5>Pesanan</h5>

            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Menu</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= strtoupper($data['catalog']); ?> (<?= $data['jumlah']; ?>x)</td>
                        <td>Rp <?= number_format($data['harga'], 0, ',', '.'); ?></td>
                    </tr>
                    <?php if (!empty($data['catatan'])) { ?>
                        <tr>
                            <td colspan="2" class="text-muted small">
                                <strong>Catatan:</strong> <?= $data['catatan']; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <hr>

            <h5>Total Pembelian</h5>
            <p class="price">
                Rp <?= number_format($data['harga'] * $data['jumlah'], 0, ',', '.'); ?>
            </p>

            <hr>

            <h5 class="mb-3">Bukti Pembayaran</h5>
            
            <?php if (!empty($data['bukti'])) { ?>
                <p class="text-success mb-2">
                    Pelanggan mengonfirmasi pembayaran sebesar: <strong>Rp <?= number_format($data['total_bayar'], 0, ',', '.'); ?></strong>
                </p>
                <div class="mb-4 p-2 border rounded bg-light text-center" style="max-width: 350px;">
                    <img src="../asset/<?= $data['bukti']; ?>" alt="Bukti Transfer" class="img-fluid rounded" style="max-height: 400px; object-fit: contain;">
                </div>
            <?php } else { ?>
                <div class="alert alert-warning py-2 small" style="max-width: 400px;">
                    Belum ada bukti pembayaran yang diunggah oleh pelanggan.
                </div>
            <?php } ?>

            <hr>

            <div class="d-flex gap-2">
                <a href="index.php" class="btn btn-outline-dark">
                    Kembali
                </a>
                
                <?php if (!empty($data['bukti'])) { ?>
                    <a href="konfirmasi_pesanan.php?id=<?= $data['id']; ?>" class="btn btn-dark">
                        Konfirmasi Pesanan
                    </a>
                <?php } ?>
            </div>

        </div>

    </div>

    <script src="script.js"></script>

</body>

</html>