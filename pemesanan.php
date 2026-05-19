<?php
// Menangkap parameter nama menu kopi dari URL halaman index.php lewat global variabel GET
$item_terpilih = isset($_GET['item']) ? $_GET['item'] : ""; 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PesanKuy - Pemesanan</title>
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
                    <li class="nav-item"><a class="nav-link active" href="pemesanan.php">Pesanan</a></li> 
                    <li class="nav-item"><a class="nav-link" href="pembayaran.php">Pembayaran</a></li> 
                    <li class="nav-item"><a class="nav-link" href="status.php">Status</a></li> 
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-5" style="max-width: 600px;">
        <div class="card p-4 shadow-sm"> 
            <h2 class="mb-4 text-center">Formulir Pemesanan</h2>
            
            <form action="pembayaran.php" method="POST"> 
                
                <div class="mb-3">
                    <label class="form-label">Nama Pemesan</label>
                    <input type="text" name="nama_pemesan" class="form-control" required placeholder="Masukkan nama Anda">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Menu yang Dipilih</label>
                    <select name="menu_kopi" class="form-select" required>
                        <option value="" disabled <?php echo ($item_terpilih == "") ? "selected" : ""; ?>>-- Pilih Menu Kopi --</option>
                        
                        <option value="Latte Coffee" <?php echo ($item_terpilih == "Latte Coffee") ? "selected" : ""; ?>>Latte Coffee</option>
                        <option value="Cappuccino" <?php echo ($item_terpilih == "Cappuccino") ? "selected" : ""; ?>>Cappuccino</option>
                        <option value="Espresso" <?php echo ($item_terpilih == "Espresso") ? "selected" : ""; ?>>Espresso</option>
                        <option value="Americano" <?php echo ($item_terpilih == "Americano") ? "selected" : ""; ?>>Americano</option>
                        <option value="Macchiato" <?php echo ($item_terpilih == "Macchiato") ? "selected" : ""; ?>>Macchiato</option>
                        <option value="Mocha" <?php echo ($item_terpilih == "Mocha") ? "selected" : ""; ?>>Mocha</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah Pembelian</label>
                    <input type="number" name="jumlah" class="form-control" min="1" required placeholder="Contoh: 1">
                </div>

                <div class="mb-3">
                    <label class="form-label">Catatan Tambahan</label>
                    <textarea name="catatan" class="form-control" rows="3" placeholder="Contoh: Es sedikit saja..."></textarea>
                </div>

                <button type="submit" class="btn btn-success w-100">Lanjutkan ke Pembayaran</button>
            </form>
        </div>
    </main>

</body>
</html>