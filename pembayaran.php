<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">

        <div class="container-fluid">

            <a class="navbar-brand" href="index.php">
                PesanKuy
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Menu
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pemesanan.php">
                            Pesanan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="pembayaran.php">
                            Pembayaran
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>
    <!-- NAVBAR END -->


    <!-- PEMBAYARAN -->
    <main class="container mt-5 mb-5">

        <h1 class="text-center fw-bold mb-5">
            Konfirmasi Pembayaran
        </h1>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <!-- DETAIL -->
                <div class="card border-0 shadow rounded-4 p-4 mb-4">

                    <h3 class="fw-bold mb-4">
    Detail Pembayaran
</h3>

<div class="d-flex justify-content-between mb-3">
    <h5>Latte Coffee</h5>
    <h5>Rp25.000</h5>
</div>

<div class="d-flex justify-content-between mb-3">
    <h5>Cappuccino</h5>
    <h5>Rp30.000</h5>
</div>

<div class="d-flex justify-content-between mb-3">
    <h5>Espresso</h5>
    <h5>Rp20.000</h5>
</div>

<div class="d-flex justify-content-between mb-3">
    <h5>Americano</h5>
    <h5>Rp22.000</h5>
</div>

<div class="d-flex justify-content-between mb-3">
    <h5>Mocha</h5>
    <h5>Rp28.000</h5>
</div>

<div class="d-flex justify-content-between mb-3">
    <h5>Matcha Latte</h5>
    <h5>Rp27.000</h5>
</div>

<hr>

<div class="d-flex justify-content-between mb-3">

    <h5>Total Pesanan</h5>

    <h5 class="text-success fw-bold">
        Rp177.000
    </h5>

</div>

<div class="d-flex justify-content-between mb-3">

    <h5>Atas Nama</h5>

    <h5>
        PesanKuy Cafe
    </h5>

</div>

<div class="d-flex justify-content-between mb-3">

    <h5>Bank Tujuan</h5>

    <h5>
        BCA
    </h5>

</div>

<div class="d-flex justify-content-between">

    <h5>No Rekening</h5>

    <h5 class="fw-bold">
        1234567890
    </h5>

</div>

                <!-- FORM -->
                <div class="card border-0 shadow rounded-4 p-4">

                    <h3 class="fw-bold mb-4">
                        Upload Bukti Transfer
                    </h3>

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Nama Pemesan
                        </label>

                        <input type="text"
                            class="form-control p-3"
                            placeholder="Masukkan Nama">

                    </div>

                    <div class="mb-4">

                        <label class="form-label fw-bold">
                            Upload Bukti Transfer
                        </label>

                        <input type="file"
                            class="form-control p-3">

                    </div>

                    <button class="btn btn-success w-100 py-3 rounded-4 fw-bold shadow mb-3">

                        Konfirmasi Pembayaran

                    </button>

                    <a href="status.php"
                        class="btn btn-dark w-100 py-3 rounded-4 fw-bold shadow">

                        Lihat Status Pesanan

                    </a>

                </div>

            </div>

        </div>

    </main>
    <!-- PEMBAYARAN END -->


    <!-- FOOTER -->
    <footer>

        <div class="fot">

            <p>
                Pesanan Menjadi lebih Mudah, PesanKuy@2026
            </p>

        </div>

    </footer>
    <!-- FOOTER END -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>