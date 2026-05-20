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
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Menu</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pesanan</a></li> -->
                    <!-- <li class="nav-item"><a class="nav-link" href="pembayaran.php">Pembayaran</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="status.php">Status</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container my-4">
        <h1 class=" mb-4">Menu Best Seller</h1>
        <div class="row g-4 justify-content-center">

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Latte Coffe.jpg" class="card-img-top" alt="Latte Coffee">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Latte Coffee</h5>
                        <!-- <p class="card-text text-danger fw-bold">Rp 25.000</p> -->
                        <p class="card-text flex-grow-1">Kopi latte creamy dengan rasa lembut dan hangat.</p>
                        <!-- <form action="pemesanan.php" method="GET"> 
                            <input type="hidden" name="item" value="Latte Coffee"> 
                            <button type="submit" class="btn btn-primary w-100">Tambahkan</button> 
                        </form> -->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Cappuccino.jpg" class="card-img-top" alt="Cappuccino">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Cappuccino</h5>
                        <!-- <p class="card-text text-danger fw-bold">Rp 28.000</p> -->
                        <p class="card-text flex-grow-1">Cappuccino dengan foam susu tebal dan aroma kopi kuat.</p>
                        <!-- <form action="pemesanan.php" method="GET"> 
                            <input type="hidden" name="item" value="Cappuccino"> 
                            <button type="submit" class="btn btn-primary w-100">Tambahkan</button>
                        </form> -->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Espresso.jpg" class="card-img-top" alt="Espresso">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Espresso</h5>
                        <!-- <p class="card-text text-danger fw-bold">Rp 20.000</p> -->
                        <p class="card-text flex-grow-1">Espresso hitam pekat dengan cita rasa kopi asli.</p>
                        <!-- <form action="pemesanan.php" method="GET"> 
                            <input type="hidden" name="item" value="Espresso"> 
                            <button type="submit" class="btn btn-primary w-100">Tambahkan</button>
                        </form> -->
                    </div>
                </div>
            </div>

            <!-- <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Americano.jpg" class="card-img-top" alt="Americano">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Americano</h5>
                        <p class="card-text text-danger fw-bold">Rp 22.000</p>
                        <p class="card-text flex-grow-1">Kopi hitam ringan perpaduan espresso dengan air panas.</p>
                        <form action="pemesanan.php" method="GET"> 
                            <input type="hidden" name="item" value="Americano"> 
                            <button type="submit" class="btn btn-primary w-100">Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Matcha Latte.jpg" class="card-img-top" alt="Macchiato">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Macchiato</h5>
                        <p class="card-text text-danger fw-bold">Rp 27.000</p>
                        <p class="card-text flex-grow-1">Espresso berkualitas dengan tambahan sedikit susu buih.</p>
                        <form action="pemesanan.php" method="GET"> 
                            <input type="hidden" name="item" value="Macchiato"> 
                            <button type="submit" class="btn btn-primary w-100">Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100">
                    <img src="asset/Mocha.jpg" class="card-img-top" alt="Mocha">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Mocha</h5>
                        <p class="card-text text-danger fw-bold">Rp 30.000</p>
                        <p class="card-text flex-grow-1">Perpaduan seimbang kopi hitam, susu, dan sirup cokelat pekat.</p>
                        <form action="pemesanan.php" method="GET"> 
                            <input type="hidden" name="item" value="Mocha"> 
                            <button type="submit" class="btn btn-primary w-100">Tambahkan</button>
                        </form>
                    </div>
                </div>
            </div> -->

            <h1 class="text-center mt-5 mb-2">Menu Dan Pemesanan</h1>
            <div class="container mb-5 mt-5">
                <!-- CARD 1 -->
                <div class="menu-card d-flex justify-content-between align-items-center">

                    <div>
                        <h4>Nasi Goreng</h4>
                        <h5 class="text-danger">Rp 15.000</h5>
                        <p>Nasi goreng spesial dengan telur dan ayam.</p>
                    </div>

                    <button class="btn-plus">+</button>
                </div>

                <!-- CARD 2 -->
                <div class="menu-card d-flex justify-content-between align-items-center">

                    <div>
                        <h4>Mie Ayam</h4>
                        <h5 class="text-danger">Rp 12.000</h5>
                        <p>Mie ayam gurih dengan topping ayam manis.</p>
                    </div>

                    <button class="btn-plus">+</button>
                </div>

                <!-- CARD 3 -->
                <div class="menu-card d-flex justify-content-between align-items-center">

                    <div>
                        <h4>Es Teh Manis</h4>
                        <h5 class="text-danger">Rp 5.000</h5>
                        <p>Minuman teh dingin segar dan manis.</p>
                    </div>

                    <button class="btn-plus">+</button>
                </div>
                <a href="checkout.php">
                <button type="button" class="btn btn-secondary w-100">Checkout</button>
                </a>
            </div>

        </div>
    </main>

    <footer>
        <div class="text-center py-3 bg-dark text-white border-top">
            <p class="mb-0">Pesanan Menjadi lebih Mudah, PesanKuy@2026</p>
        </div>
    </footer>

</body>

</html>