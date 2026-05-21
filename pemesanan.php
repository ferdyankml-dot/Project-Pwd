<?php
include 'admin/koneksi.php'; 
$query_menu = mysqli_query($konek, "SELECT * FROM menu");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PesanKuy - Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark text-white p-3" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">PesanKuy</a>
        </div>
    </nav>

    <main class="container my-5" style="max-width: 600px;">
        <div class="card p-4 shadow-sm">
            <h2 class="mb-4 text-center">Form Pemesanan</h2>

            <form action="pembayaran.php" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nama Pemesan</label>
                    <input type="text" name="namap" class="form-control" required placeholder="Masukkan nama Anda">
                </div>

                <div class="mb-3">
                    <label class="form-label">Menu yang Dipilih</label>
                    <select name="idm" class="form-select" required>
                        <option value="" disabled selected>-- Pilih Menu Kopi --</option>
                        <?php while ($row = mysqli_fetch_assoc($query_menu)) {
                            echo "<option value='" . $row['idm'] . "'>" . htmlspecialchars($row['catalog']) . " - Rp " . number_format($row['harga'], 0, ',', '.') . "</option>";
                        }
                        ?>
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

                <div class="mt-4 d-flex gap-3">
                    <a href="index.php" class="btn btn-secondary w-50">Kembali</a>
                    <button type="submit" class="btn btn-success w-50">Lanjutkan ke Pembayaran</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>