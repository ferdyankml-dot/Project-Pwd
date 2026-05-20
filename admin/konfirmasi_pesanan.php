<?php
session_start();

// Proteksi halaman admin
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require_once __DIR__ . '/koneksi.php';

// Ambil ID dari URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_pesanan = mysqli_real_escape_string($konek, $_GET['id']);

    // PROSES KONFIRMASI: Mengubah status menjadi 'Selesai'
    $query_pesanan = "UPDATE pemesanan SET status = 'Selesai' WHERE id = '$id_pesanan'";

    if (mysqli_query($konek, $query_pesanan)) {
        echo "<script>
                alert('Pesanan Berhasil Dikonfirmasi dan Dinyatakan Selesai!');
                window.location.href = 'index.php';
              </script>";
    } else {
        echo "Gagal memproses konfirmasi: " . mysqli_error($konek);
    }
} else {
    // Jika tidak ada ID di URL, kembalikan ke dashboard
    header("Location: index.php");
    exit;
}
