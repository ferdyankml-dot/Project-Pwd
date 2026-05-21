<?php
include 'admin/koneksi.php';

// Query untuk mengambil data dari tabel menu
$query  = "SELECT * FROM menu";
$result = mysqli_query($konek, $query);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PesanKuy - Menu Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PesanKuy</a>
        </div>
    </nav>

    <main class="container my-4">
        <h1 class="mb-4">Menu Best Seller</h1>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Latte Coffe.jpg" class="card-img-top" alt="Latte Coffee">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Latte Coffee</h5>
                        <p class="card-text flex-grow-1">Kopi latte creamy dengan rasa lembut dan hangat.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Cappuccino.jpg" class="card-img-top" alt="Cappuccino">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Cappuccino</h5>
                        <p class="card-text flex-grow-1">Cappuccino dengan foam susu tebal dan aroma kopi kuat.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Espresso.jpg" class="card-img-top" alt="Espresso">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Espresso</h5>
                        <p class="card-text flex-grow-1">Espresso hitam pekat dengan cita rasa kopi asli.</p>
                    </div>
                </div>
            </div>
        </div>

        <h1 class="text-center mt-5 mb-4">Daftar Menu</h1>
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col">
                        <div class="card p-3 d-flex flex-row justify-content-between align-items-center h-100 shadow-sm">
                            <div>
                                <h4><?= htmlspecialchars($row['catalog']); ?></h4>
                                <h5 class="text-danger">Rp <?= number_format((float)$row['harga'], 0, ',', '.'); ?></h5>
                                <p class="text-muted small mb-0"><?= htmlspecialchars($row['keterangan']); ?></p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<div class='col-12 text-center'><p class='text-muted'>Belum ada menu yang tersedia.</p></div>";
            }
            ?>
        </div>

        <div class="mt-5 text-center">
            <a href="pemesanan.php" class="btn btn-primary btn-lg w-100 py-2 fw-bold">Pesan Sekarang</a>
        </div>

    </main>

    <?php mysqli_close($konek); ?>

    <footer>
        <div class="text-center py-3 bg-dark text-white border-top mt-5">
            <p class="mb-0">Pesanan Menjadi lebih Mudah, PesanKuy@2026</p>
        </div>
    </footer>
</body>
</html>