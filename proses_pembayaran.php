<?php
session_start();
include 'admin/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form pembayaran
    $id_pemesanan = mysqli_real_escape_string($konek, $_POST['id_pemesanan']);
    $total = mysqli_real_escape_string($konek, $_POST['total']);

    // Ambil data file bukti transfer
    $nama_file = $_FILES['bukti']['name'];
    $tmp_name = $_FILES['bukti']['tmp_name'];
    $error_file = $_FILES['bukti']['error'];

    // Validasi file sudah dipilih
    if ($error_file === 4) {
        $_SESSION['notif_error'] = "Harap unggah bukti pembayaran terlebih dahulu!";
        header("Location: " . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
        exit;
    }

    // Validasi ekstensi file
    $ekstensi_valid = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $ekstensi_valid)) {
        $_SESSION['notif_error'] = "Format file harus JPG, JPEG, atau PNG!";
        header("Location: " . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
        exit;
    }

    // Buat nama file unik
    $nama_file_baru = uniqid() . '.' . $ekstensi_file;
    $folder_tujuan = 'asset/' . $nama_file_baru;

    // Upload file dan simpan ke database
    if (move_uploaded_file($tmp_name, $folder_tujuan)) {
        $sql_pembayaran = "INSERT INTO pembayaran (total, bukti, id) VALUES ('$total', '$nama_file_baru', '$id_pemesanan')";

        if (mysqli_query($konek, $sql_pembayaran)) {
            $_SESSION['notif_sukses'] = "Pembayaran Berhasil Dikonfirmasi! Pesanan Anda sedang diproses.";
            header("Location: index.php");
            exit;
        } else {
            echo "Gagal menyimpan data pembayaran: " . mysqli_error($konek);
        }
    } else {
        $_SESSION['notif_error'] = "Gagal mengunggah gambar ke server.";
        header("Location: " . ($_SERVER['HTTP_REFERER'] ?? 'index.php'));
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>