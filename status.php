<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Status Pesanan</title>

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
                    <a class="nav-link" href="index.php">Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="pemesanan.php">Pesanan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="pembayaran.php">Pembayaran</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="status.php">Status</a>
                </li>

            </ul>

        </div>

    </div>

</nav>
<!-- NAVBAR END -->


<!-- STATUS -->
<main class="container mt-5 mb-5">

    <h1 class="text-center fw-bold mb-5">
        Status Pesanan
    </h1>

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card border-0 shadow rounded-4 p-5">

                <h3 class="fw-bold mb-4">
                    Detail Pesanan
                </h3>

                <div class="d-flex justify-content-between mb-3">
                    <h5>Nama Pemesan</h5>
                    <h5>Khamil</h5>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <h5>Total Pesanan</h5>
                    <h5>6 Item</h5>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <h5>Total Pembayaran</h5>
                    <h5 class="text-success fw-bold">Rp177.000</h5>
                </div>

                <hr>

                <h4 class="fw-bold mb-4 text-center">
                    Progress Pesanan
                </h4>

                <!-- STATUS STEP -->
                <div class="mb-4">

                    <div class="alert alert-success rounded-4">
                        ✅ Pembayaran Berhasil Diverifikasi
                    </div>

                    <div class="alert alert-warning rounded-4">
                        ☕ Pesanan Sedang Diproses
                    </div>

                    <div class="alert alert-secondary rounded-4">
                        ⏳ Sedang Dibuat Barista
                    </div>

                    <div class="alert alert-secondary rounded-4">
                        📦 Siap Diambil
                    </div>

                </div>

                <div class="text-center">

                    <a href="index.php"
                        class="btn btn-dark px-5 py-3 rounded-4 fw-bold shadow">

                        Kembali ke Menu

                    </a>

                </div>

            </div>

        </div>

    </div>

</main>
<!-- STATUS END -->


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