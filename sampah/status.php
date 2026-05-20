<?php
include 'admin/koneksi.php'; // Sesuai dengan path di index.php Anda

// Ambil ID pesanan dari URL (contoh: status.php?id=7)
if (!isset($_GET['id']) || empty($_GET['id'])) {
    echo "<script>alert('ID Pesanan tidak ditemukan!'); window.location.href = 'index.php';</script>";
    exit;
}

$id_pesanan = mysqli_real_escape_string($konek, $_GET['id']);

// Query ambil data pemesanan dan menu
$query = "SELECT pemesanan.*, menu.catalog, menu.harga 
          FROM pemesanan 
          LEFT JOIN menu ON pemesanan.idm = menu.idm 
          WHERE pemesanan.id = '$id_pesanan'";

$result = mysqli_query($konek, $query);
$data = mysqli_fetch_assoc($result);

// Jika ID pesanan tidak ada di database
if (!$data) {
    echo "<script>alert('Pesanan tidak ditemukan atau sudah diproses!'); window.location.href = 'index.php';</script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pesanan Anda - PesanKuy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PesanKuy</a>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <div class="box">
            
            <h2 class="mb-2">Status Pesanan</h2>
            <p class="text-muted">ID Pesanan: #<?= $data['id']; ?></p>
            
            <hr>

            <div class="text-center my-4 py-3 rounded bg-light">
                <h5>Status Saat Ini:</h5>
                
                <?php if ($data['status'] == 'Pending') { ?>
                    <span class="badge bg-warning text-dark fs-5 px-4 py-2 mt-2">
                        ⏳ Menunggu Konfirmasi Admin
                    </span>
                    <p class="text-muted small mt-3 mb-0">
                        Bukti pembayaran Anda sedang dicek oleh kasir. Mohon tunggu sebentar ya!
                    </p>
                <?php } else { ?>
                    <span class="badge bg-success fs-5 px-4 py-2 mt-2">
                        ✅ Pesanan Selesai / Siap Diambil
                    </span>
                    <p class="text-muted small mt-3 mb-0">
                        Hore! Pembayaran valid dan kopi kesukaanmu sedang diracik/siap disajikan.
                    </p>
                <?php } ?>
            </div>

            <hr>

            <h5>Detail Pemesan</h5>
            <p class="mb-1"><strong>Nama:</strong> <?= strtoupper($data['namap']); ?></p>
            <p><strong>Catatan:</strong> <?= !empty($data['catatan']) ? $data['catatan'] : '-'; ?></p>

            <hr>

            <h5>Item Yang Dibeli</h5>
            <table class="table table-bordered mt-2">
                <thead class="table-dark">
                    <tr>
                        <th>Menu</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= strtoupper($data['catalog']); ?> (<?= $data['jumlah']; ?>x)</td>
                        <td class="price">Rp <?= number_format($data['harga'] * $data['jumlah'], 0, ',', '.'); ?></td>
                    </tr>
                </tbody>
            </table>

            <hr>

            <div class="d-flex gap-2 mt-4">
                <a href="index.php" class="btn btn-outline-dark">
                    Kembali ke Menu Utama
                </a>
                <button onclick="window.location.reload();" class="btn btn-dark">
                    🔄 Cek Ulang Status
                </button>
            </div>

        </div>
    </div>

    <footer class="text-center py-3 text-muted small bg-light border-top mt-5">
        Pesanan Menjadi Lebih Mudah, PesanKuy@2026
    </footer>

</body>

</html>