<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container mt-5">

        <div class="box">

            <h2 class="mb-4">
                Tambah Menu
            </h2>
            <form action="proses_tambah.php" method="POST">
                <div class="mb-3">

                    <label class="form-label">
                        Nama Menu
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        name="nama_menu">
                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Harga Menu
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        name="harga">

                </div>
                <div class="mb-3">

                    <label class="form-label">
                        keterangan
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        name="keterangan">

                </div>



                <button class="btn btn-dark" name="simpan">
                    Simpan
                </button>

                <a
                    href="index.php"
                    class="btn btn-outline-dark mt-4">

                    Kembali

                </a>

            </form>
        </div>

    </div>

</body>

</html>