<?php
// Menangkap data input nama dari formulir halaman pemesanan.php menggunakan POST
$nama   = isset($_POST['nama_pemesan']) ? $_POST['nama_pemesan'] : "Pelanggan";
// Menangkap data teks nama menu kopi yang dipilih dari dropdown via POST
$menu   = isset($_POST['menu_kopi']) ? $_POST['menu_kopi'] : "";
// Menangkap nilai kuantitas/jumlah gelas pembelian bertipe angka via POST
$jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 1;
// Menangkap teks tulisan catatan opsional dari pembeli lewat POST
$catatan= isset($_POST['catatan']) ? $_POST['catatan'] : "";

// Membuat variabel penampung awal untuk nilai harga satu gelas kopi
$harga_satuan = 0;

// Menentukan nominal harga berdasarkan 6 nama menu menggunakan logika percabangan IF-ELSE
if ($menu == "Latte Coffee") {
    $harga_satuan = 25000; // Mengisi variabel harga jika teks yang cocok adalah Latte Coffee
} else if ($menu == "Cappuccino") {
    $harga_satuan = 28000; // Mengisi variabel harga jika teks yang cocok adalah Cappuccino
} else if ($menu == "Espresso") {
    $harga_satuan = 20000; // Mengisi variabel harga jika teks yang cocok adalah Espresso
} else if ($menu == "Americano") {
    $harga_satuan = 22000; // Mengisi variabel harga jika teks yang cocok adalah Americano
} else if ($menu == "Macchiato") {
    $harga_satuan = 27000; // Mengisi variabel harga jika teks yang cocok adalah Macchiato
} else if ($menu == "Mocha") {
    $harga_satuan = 30000; // Mengisi variabel harga jika teks yang cocok adalah Mocha
} else {
    $harga_satuan = 0; // Nilai default jika tidak ada menu yang cocok
}

// Menghitung jumlah tagihan akhir menggunakan rumus matematika perkalian (Aritmatika)
$total_bayar = $harga_satuan * $jumlah;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PesanKuy - Pembayaran</title>
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
                    <li class="nav-item"><a class="nav-link active" href="pembayaran.php">Pembayaran</a></li> 
                    <li class="nav-item"><a class="nav-link" href="status.php">Status</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5" style="max-width: 600px;">
        <div class="card p-4 shadow-sm border-primary"> 
            <h2 class="mb-4 text-center text-primary">Konfirmasi Pembayaran</h2>
            
            <table class="table table-bordered bg-white">
                <tr><th>Nama Pemesan</th><td><?php echo $nama; ?></td></tr> 
                <tr><th>Item Kopi</th><td><?php echo $menu; ?></td></tr> 
                <tr><th>Harga Satuan</th><td>Rp <?php echo number_format($harga_satuan); ?></td></tr> 
                <tr><th>Jumlah Qty</th><td><?php echo $jumlah; ?> Gelas</td></tr> 
                <tr><th>Catatan</th><td><?php echo empty($catatan) ? "-" : $catatan; ?></td></tr> 
                <tr class="table-warning"> 
                    <th>Total Bayar</th>
                    <th><strong>Rp <?php echo number_format($total_bayar); ?></strong></th> 
                </tr>
            </table>

            <form action="status.php" method="POST">
                <input type="hidden" name="nama" value="<?php echo $nama; ?>"> 
                <input type="hidden" name="menu" value="<?php echo $menu; ?>"> 
                <input type="hidden" name="total" value="<?php echo $total_bayar; ?>"> 
                
                <div class="mb-3">
                    <label class="form-label">Pilih Metode Pembayaran</label>
                    <select name="metode" class="form-select" required>
                        <option value="Tunai / Kasir">Tunai di Kasir</option>
                        <option value="Transfer Bank">Transfer Bank (VA)</option>
                        <option value="E-Wallet">E-Wallet (QRIS)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Konfirmasi & Bayar Sekarang</button>
            </form>
        </div>
    </main>

</body>
</html>