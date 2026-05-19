<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5">

        <div class="box">

            <h2 class="mb-4">
                Detail Pesanan
            </h2>

            <h5>Atas Nama Pembeli</h5>
            <p>FERDYAN</p>

            <hr>

            <h5>Pesanan</h5>

            <table class="table table-bordered">

                <thead class="table-dark">

                    <tr>
                        <th>Menu</th>
                        <th>Harga</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td>Amerikano</td>
                        <td>Rp 25.000</td>
                    </tr>

                    <tr>
                        <td>Kopi Susu</td>
                        <td>Rp 30.000</td>
                    </tr>

                </tbody>

            </table>

            <hr>

            <h5>Total Pembelian</h5>

            <p class="price">
                Rp 55.000
            </p>

            <hr>

            <div class="d-flex gap-2">
                <a
                    href="index.php"
                    class="btn btn-outline-dark">

                    Kembali

                </a>

            </div>

        </div>

    </div>

    <script src="script.js"></script>

</body>

</html>