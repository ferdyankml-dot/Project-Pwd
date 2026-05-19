<?php
// Menangkap data string nama final yang dilempar dari form halaman pembayaran.php via POST
$nama_final   = isset($_POST['nama']) ? $_POST['nama'] : "Pelanggan";
// Menangkap data teks nama produk kopi yang dikirim secara tersembunyi via POST
$menu_final   = isset($_POST['menu']) ? $_POST['menu'] : "-";
// Menangkap data angka total tagihan hasil perkalian aritmatika via POST
$total_final  = isset($_POST['total']) ? $_POST['total'] : 0;
// Menangkap opsi teks pilihan metode pembayaran dari dropdown select via POST
$metode_final = isset($_POST['metode']) ? $_POST['metode'] : "-";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PesanKuy - Status</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PesanKuy</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Menu</a></li> 
                    <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pesanan</a></li> 
                    <li class="nav-item"><a class="nav-link" href="pembayaran.php">Pembayaran</a></li> 
                    <li class="nav-item"><a class="nav-link active" href="status.php">Status</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5 text-center" style="max-width: 500px;">
        <div class="alert alert-success p-4 shadow-sm" role="alert">
            <h4 class="alert-heading mb-3">Pesanan Berhasil Diproses!</h4> 
            <p class="mb-3">Terima kasih <strong><?php echo $nama_final; ?></strong>, transaksi Anda telah tercatat.</p> 
            <hr> 
            
            <div class="text-start bg-white p-3 rounded border text-dark mb-3">
                <p class="mb-1"><strong>Detail Transaksi:</strong></p>
                <small class="d-block">Menu Kopi: <?php echo $menu_final; ?></small> 
                <small class="d-block">Metode: <?php echo $metode_final; ?></small> 
                <small class="d-block">Total Tagihan: Rp <?php echo number_format($total_final); ?></small> 
            </div>

            <p class="mb-4">Status Saat Ini: <span class="badge bg-warning text-dark text-uppercase">Sedang Disiapkan</span></p>
            
            <div class="d-flex gap-2">
                <a href="index.php" class="btn btn-success flex-fill">Pesan Menu Lain</a>
                
                <button type="button" class="btn btn-outline-secondary flex-fill" onclick="window.print()">Cetak Nota</button>
            </div>
        </div>
    </main>

</body>
</html>