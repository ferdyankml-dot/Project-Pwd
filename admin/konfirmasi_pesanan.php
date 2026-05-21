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

    // Update status pesanan
    $query_pesanan = "UPDATE pemesanan SET status = 'Selesai' WHERE id = '$id_pesanan'";

    if (mysqli_query($konek, $query_pesanan)) {
        $_SESSION['notif_sukses'] = "Pesanan Berhasil Dikonfirmasi dan Dinyatakan Selesai!";
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal memproses konfirmasi: " . mysqli_error($konek);
    }
} else {
    header("Location: index.php");
    exit;
}