<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">

    <div class="box">

        <h2 class="mb-4">
            Edit Menu
        </h2>

        <div class="mb-3">

            <label class="form-label">
                Nama Menu
            </label>

            <input 
                type="text"
                class="form-control"
                value="Amerikano">

        </div>

        <div class="mb-3">

            <label class="form-label">
                Harga Menu
            </label>

            <input 
                type="text"
                class="form-control"
                value="25000">

        </div>

        <div class="mb-3">

            <label class="form-label">
                Keterangan
            </label>

            <textarea 
                class="form-control"
                rows="3">Kopi hitam tanpa susu dengan rasa kuat.</textarea>

        </div>

        <button class="btn btn-dark">
            Simpan
        </button>

        <a 
            href="index.php"
            class="btn btn-outline-dark">

            Kembali

        </a>

    </div>

</div>

</body>
</html>