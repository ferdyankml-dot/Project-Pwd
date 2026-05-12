<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pemesanan</title>

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
                        <a class="nav-link active" href="pemesanan.php">
                            Pesanan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="pembayaran.php">
                            Pembayaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="status.php">
                            Status
                        </a>
                    </li>
                </ul>

            </div>

        </div>

    </nav>
    
<!-- PEMESANAN -->
<main class="container mt-5 mb-5">

    <h1 class="text-center fw-bold mb-5">
        Keranjang Pesanan
    </h1>

    <div class="row g-4">

        <!-- LATTE -->
        <div class="col-md-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <img src="asset/Latte Coffe.jpg"
                    class="card-img-top"
                    style="height:180px; object-fit:cover;">

                <div class="card-body">

                    <h5 class="fw-bold">
                        Latte Coffee
                    </h5>

                    <p class="text-secondary">
                        Kopi latte creamy dengan rasa lembut.
                    </p>

                    <div class="d-flex justify-content-between align-items-center">

                        <h5 class="text-primary fw-bold">
                            Rp25.000
                        </h5>

                        <div class="d-flex align-items-center gap-2">

                            <button class="btn btn-outline-dark btn-sm">
                                -
                            </button>

                            <span class="fw-bold">
                                2
                            </span>

                            <button class="btn btn-dark btn-sm">
                                +
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- CAPPUCCINO -->
        <div class="col-md-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <img src="asset/Cappuccino.jpg"
                    class="card-img-top"
                    style="height:180px; object-fit:cover;">

                <div class="card-body">

                    <h5 class="fw-bold">
                        Cappuccino
                    </h5>

                    <p class="text-secondary">
                        Cappuccino foam lembut dan creamy.
                    </p>

                    <div class="d-flex justify-content-between align-items-center">

                        <h5 class="text-primary fw-bold">
                            Rp30.000
                        </h5>

                        <div class="d-flex align-items-center gap-2">

                            <button class="btn btn-outline-dark btn-sm">
                                -
                            </button>

                            <span class="fw-bold">
                                1
                            </span>

                            <button class="btn btn-dark btn-sm">
                                +
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- ESPRESSO -->
        <div class="col-md-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <img src="asset/Espresso.jpg"
                    class="card-img-top"
                    style="height:180px; object-fit:cover;">

                <div class="card-body">

                    <h5 class="fw-bold">
                        Espresso
                    </h5>

                    <p class="text-secondary">
                        Espresso hitam pekat khas kopi asli.
                    </p>

                    <div class="d-flex justify-content-between align-items-center">

                        <h5 class="text-primary fw-bold">
                            Rp20.000
                        </h5>

                        <div class="d-flex align-items-center gap-2">

                            <button class="btn btn-outline-dark btn-sm">
                                -
                            </button>

                            <span class="fw-bold">
                                1
                            </span>

                            <button class="btn btn-dark btn-sm">
                                +
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- AMERICANO -->
        <div class="col-md-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <img src="asset/Americano.jpg"
                    class="card-img-top"
                    style="height:180px; object-fit:cover;">

                <div class="card-body">

                    <h5 class="fw-bold">
                        Americano
                    </h5>

                    <p class="text-secondary">
                        Americano ringan dengan rasa pahit.
                    </p>

                    <div class="d-flex justify-content-between align-items-center">

                        <h5 class="text-primary fw-bold">
                            Rp22.000
                        </h5>

                        <div class="d-flex align-items-center gap-2">

                            <button class="btn btn-outline-dark btn-sm">
                                -
                            </button>

                            <span class="fw-bold">
                                1
                            </span>

                            <button class="btn btn-dark btn-sm">
                                +
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- MOCHA -->
        <div class="col-md-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <img src="asset/Mocha.jpg"
                    class="card-img-top"
                    style="height:180px; object-fit:cover;">

                <div class="card-body">

                    <h5 class="fw-bold">
                        Mocha
                    </h5>

                    <p class="text-secondary">
                        Perpaduan kopi dan coklat manis.
                    </p>

                    <div class="d-flex justify-content-between align-items-center">

                        <h5 class="text-primary fw-bold">
                            Rp28.000
                        </h5>

                        <div class="d-flex align-items-center gap-2">

                            <button class="btn btn-outline-dark btn-sm">
                                -
                            </button>

                            <span class="fw-bold">
                                1
                            </span>

                            <button class="btn btn-dark btn-sm">
                                +
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- MATCHA -->
        <div class="col-md-4">

            <div class="card shadow border-0 rounded-4 h-100">

                <img src="asset/Matcha Latte.jpg"
                    class="card-img-top"
                    style="height:180px; object-fit:cover;">

                <div class="card-body">

                    <h5 class="fw-bold">
                        Matcha Latte
                    </h5>

                    <p class="text-secondary">
                        Matcha creamy khas Jepang.
                    </p>

                    <div class="d-flex justify-content-between align-items-center">

                        <h5 class="text-primary fw-bold">
                            Rp27.000
                        </h5>

                        <div class="d-flex align-items-center gap-2">

                            <button class="btn btn-outline-dark btn-sm">
                                -
                            </button>

                            <span class="fw-bold">
                                1
                            </span>

                            <button class="btn btn-dark btn-sm">
                                +
                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- TOTAL -->
        <div class="col-12">

            <div class="card border-0 shadow rounded-4 p-4">

                <div class="d-flex justify-content-between align-items-center">

                    <div>

                        <h4 class="fw-bold">
                            Total Pembayaran
                        </h4>

                        <p class="text-secondary m-0">
                            6 Item Pesanan
                        </p>

                    </div>

                    <h3 class="text-success fw-bold">
                        Rp177.000
                    </h3>

                </div>

            </div>

        </div>

        <!-- BUTTON -->
        <div class="col-12 d-flex justify-content-between">

            <button class="btn btn-danger px-4 py-3 rounded-4 fw-bold shadow">
                Hapus Pesanan
            </button>

            <a href="pembayaran.php"
                class="btn btn-success px-5 py-3 rounded-4 fw-bold shadow">

                Lanjut Pembayaran

            </a>

        </div>

    </div>

</main>

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