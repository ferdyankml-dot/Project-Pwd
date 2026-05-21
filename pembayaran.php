<?php
include 'admin/koneksi.php';

// Proteksi: Jika tidak datang dari form POST pemesanan, tendang kembali ke index
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php");
    exit;
}

// 1. Ambil input form dari halaman pemesanan.php
$namap   = mysqli_real_escape_string($konek, $_POST['namap']);
$idm     = mysqli_real_escape_string($konek, $_POST['idm']);
$jumlah  = mysqli_real_escape_string($konek, $_POST['jumlah']);
$catatan = mysqli_real_escape_string($konek, $_POST['catatan']);

// 2. Simpan data awal ke tabel pemesanan
$sql_simpan = "INSERT INTO pemesanan (namap, jumlah, catatan, idm) VALUES ('$namap', '$jumlah', '$catatan', '$idm')";
if (!mysqli_query($konek, $sql_simpan)) {
    die("Gagal menyimpan pesanan: " . mysqli_error($konek));
}

// Mengambil ID pemesanan yang barusan terinput otomatis
$id_pemesanan = mysqli_insert_id($konek);

// 3. Ambil data spesifik menu dari database untuk menghitung total harga rill
$query_menu = mysqli_query($konek, "SELECT catalog, harga FROM menu WHERE idm = '$idm'");
$menu       = mysqli_fetch_assoc($query_menu);

$harga_satuan = (float)$menu['harga'];
$total_bayar  = $harga_satuan * (int)$jumlah;
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran PesanKuy</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f3f4f6;
        }

        .payment-card {
            border-radius: 20px;
            overflow: hidden;
        }

        .payment-header {
            background: linear-gradient(135deg, #0d6efd, #0a58ca);
            color: white;
            padding: 25px;
        }

        .payment-method {
            border: 1px solid #dee2e6;
            border-radius: 15px;
            padding: 15px;
            transition: 0.3s;
            cursor: pointer;
        }

        .payment-method:hover {
            border-color: #0d6efd;
            background-color: #f8fbff;
        }

        .upload-box {
            border: 2px dashed #bdbdbd;
            border-radius: 15px;
            padding: 25px;
            text-align: center;
            background: #fafafa;
        }

        .upload-box:hover {
            border-color: #0d6efd;
        }

        .table th {
            width: 40%;
        }

        .qris-image {
            width: 220px;
            border-radius: 15px;
            border: 1px solid #ddd;
            padding: 10px;
            background: white;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="index.php">PesanKuy</a>
        </div>
    </nav>

    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card payment-card shadow border-0">

                    <div class="payment-header text-center">
                        <h1>Konfirmasi Pembayaran</h1>
                    </div>

                    <div class="card-body p-4">

                        <h4 class="mb-3">Detail Pesanan</h4>
                        <table class="table table-bordered align-middle">
                            <tr>
                                <th>Nama Pemesan</th>
                                <td><?= htmlspecialchars($namap); ?></td>
                            </tr>
                            <tr>
                                <th>Menu</th>
                                <td><?= htmlspecialchars($menu['catalog']); ?></td>
                            </tr>
                            <tr>
                                <th>Harga Satuan</th>
                                <td>Rp <?= number_format($harga_satuan, 0, ',', '.'); ?></td>
                            </tr>
                            <tr>
                                <th>Jumlah</th>
                                <td><?= htmlspecialchars($jumlah); ?> Porsi / Gelas</td>
                            </tr>
                            <tr>
                                <th>Catatan</th>
                                <td><?= !empty($catatan) ? htmlspecialchars($catatan) : '-'; ?></td>
                            </tr>
                            <tr class="table-primary">
                                <th>Total Bayar</th>
                                <th class="text-primary fw-bold">Rp <?= number_format($total_bayar, 0, ',', '.'); ?></th>
                            </tr>
                        </table>

                        <form action="proses_pembayaran.php" method="POST" enctype="multipart/form-data">
                            
                            <input type="hidden" name="id_pemesanan" value="<?= $id_pemesanan; ?>">
                            <input type="hidden" name="total" value="<?= $total_bayar; ?>">

                            <div class="mt-4">
                                <h4 class="mb-3">Metode Pembayaran</h4>

                                <label class="payment-method d-block mb-3">
                                    <input type="radio" class="form-check-input me-2" name="payment_method" value="Tunai" checked>
                                    <strong>Tunai / Cash</strong>
                                    <div class="small text-muted mt-1">Bayar langsung di kasir.</div>
                                </label>

                                <label class="payment-method d-block">
                                    <input type="radio" class="form-check-input me-2" name="payment_method" value="QRIS">
                                    <strong>QRIS</strong>
                                    <div class="small text-muted mt-1 mb-3">Scan QR Code di bawah ini untuk melakukan pembayaran.</div>
                                    
                                    <div>
                                        <img src="asset/qris.jpeg" alt="QRIS" class="img-fluid qris-image">
                                    </div>
                                </label>
                            </div>

                            <div class="mt-4">
                                <h4 class="mb-3">Upload Bukti Pembayaran</h4>
                                <div class="upload-box">
                                    <input type="file" name="bukti" class="form-control" required>
                                    <small class="text-muted d-block mt-2">Upload screenshot pembayaran QRIS (Format: JPG/PNG)</small>
                                </div>
                            </div>

                            <div class="mt-4 row g-3">
                                <div class="col-6">
                                    <a href="pemesanan.php" class="btn btn-secondary btn-lg w-100">Kembali</a>
                                </div>
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Konfirmasi Pembayaran</button>
                                </div>
                            </div>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>