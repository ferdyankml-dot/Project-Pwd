<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout Pesanan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f4f5f7;
        }

        .checkout-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        }

        .menu-item {
            background: #fafafa;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .rekening-card {
            background-color: #2f3640;
            color: white;
            border-radius: 15px;
            padding: 20px;
        }

        .btn-custom {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- Main -->
    <main class="container my-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="checkout-card">

                    <h2 class="text-center mb-4">Checkout Pesanan</h2>

                    <!-- Daftar Pesanan -->
                    <h5 class="mb-3">Daftar Pesanan</h5>

                    <div class="menu-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Latte Coffee</h6>
                            <small>Jumlah : 2</small>
                        </div>

                        <div class="fw-bold text-danger">
                            Rp 50.000
                        </div>
                    </div>

                    <div class="menu-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Cappuccino</h6>
                            <small>Jumlah : 1</small>
                        </div>

                        <div class="fw-bold text-danger">
                            Rp 28.000
                        </div>
                    </div>

                    <div class="menu-item d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="mb-1">Espresso</h6>
                            <small>Jumlah : 1</small>
                        </div>

                        <div class="fw-bold text-danger">
                            Rp 20.000
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="d-flex justify-content-between mt-4 mb-4">
                        <h5>Total Pembayaran</h5>
                        <h5 class="text-danger">Rp 98.000</h5>
                    </div>

                    <!-- Form -->
                    <form>

                        <!-- Nama -->
                        <div class="mb-3">
                            <label class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" placeholder="Masukkan nama lengkap">
                        </div>

                        <!-- Rekening -->
                        <div class="rekening-card mb-4">
                            <h5>Transfer Pembayaran</h5>
                            <p class="mb-1">Bank BCA</p>
                            <h4>1234567890</h4>
                            <small>a.n PesanKuy Indonesia</small>
                        </div>

                        <!-- Upload -->
                        <div class="mb-4">
                            <label class="form-label">Upload Bukti Pembayaran</label>
                            <input type="file" class="form-control">
                        </div>

                        <!-- Button -->
                        <div class="d-flex gap-2">

                            <a href="index.php" class="btn btn-secondary btn-custom">
                                Kembali
                            </a>

                            <button type="submit" class="btn btn-dark btn-custom">
                                Konfirmasi
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>
</body>
</html>