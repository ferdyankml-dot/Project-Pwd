<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PesanKuy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pemesanan.php">Pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="embayaran.php">Pembayaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar end -->


    <!-- content -->
<main class="container">

    <h1 class="sub">Menu</h1>

    <div class="row g-4 justify-content-center">

        <!-- LATTE -->
        <div class="col-md-4">
            <div class="card">
                <img src="asset/img_FuVZ92o.jpg" class="card-img-top" alt="Latte Coffee">

                <div class="card-body">
                    <h5 class="card-title">Latte Coffee</h5>

                    <p class="card-text">
                        Kopi latte creamy dengan rasa lembut dan hangat.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Tambahkan
                    </a>
                </div>
            </div>
        </div>

        <!-- CAPPUCCINO -->
        <div class="col-md-4">
            <div class="card">
                <img src="asset/img_FuVZ92o.jpg" class="card-img-top" alt="Cappuccino">

                <div class="card-body">
                    <h5 class="card-title">Cappuccino</h5>

                    <p class="card-text">
                        Cappuccino dengan foam susu tebal dan aroma kopi kuat.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Tambahkan
                    </a>
                </div>
            </div>
        </div>

        <!-- ESPRESSO -->
        <div class="col-md-4">
            <div class="card">
                <img src="asset/img_FuVZ92o.jpg" class="card-img-top" alt="Espresso">

                <div class="card-body">
                    <h5 class="card-title">Espresso</h5>

                    <p class="card-text">
                        Espresso hitam pekat dengan cita rasa kopi asli.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Tambahkan
                    </a>
                </div>
            </div>
        </div>

        <!-- AMERICANO -->
        <div class="col-md-4">
            <div class="card">
                <img src="asset/img_FuVZ92o.jpg" class="card-img-top" alt="Americano">

                <div class="card-body">
                    <h5 class="card-title">Americano</h5>

                    <p class="card-text">
                        Kopi americano ringan dengan rasa pahit seimbang.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Tambahkan
                    </a>
                </div>
            </div>
        </div>

        <!-- MOCHA -->
        <div class="col-md-4">
            <div class="card">
                <img src="asset/img_FuVZ92o.jpg" class="card-img-top" alt="Mocha">

                <div class="card-body">
                    <h5 class="card-title">Mocha</h5>

                    <p class="card-text">
                        Perpaduan kopi dan coklat dengan rasa manis nikmat.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Tambahkan
                    </a>
                </div>
            </div>
        </div>

        <!-- MATCHA -->
        <div class="col-md-4">
            <div class="card">
                <img src="asset/img_FuVZ92o.jpg" class="card-img-top" alt="Matcha Latte">

                <div class="card-body">
                    <h5 class="card-title">Matcha Latte</h5>

                    <p class="card-text">
                        Minuman matcha creamy dengan rasa teh hijau khas Jepang.
                    </p>

                    <a href="#" class="btn btn-primary">
                        Tambahkan
                    </a>
                </div>
            </div>
        </div>

    </div>

</main>
    <!-- content end-->


    <!-- footer -->
    <footer>
        <div class="fot">
            <p>Pesanan Menjadi lebih Mudah, PesanKuy@2026</p>
        </div>
    </footer>
    <!-- footer end-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>