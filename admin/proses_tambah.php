<?php
session_start();

if(!isset($_SESSION['login'])){

    header("Location: login.php");
    exit;

}
// include 'koneksi.php';
require_once __DIR__ . '/koneksi.php';

if (isset($_POST['simpan'])) {
    $catalog = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    $query = mysqli_query($konek, "INSERT INTO menu (catalog, harga, keterangan) VALUES ('$catalog', '$harga', '$keterangan')");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menambahkan data";
    }
}
?>