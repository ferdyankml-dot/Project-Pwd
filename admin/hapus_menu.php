<?php
session_start();

if(!isset($_SESSION['login'])){

    header("Location: login.php");
    exit;

}
require_once __DIR__ . '/koneksi.php';

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = mysqli_query($konek, "DELETE FROM menu WHERE idm = '$id'");

    if($query){

        header("Location: index.php");
        exit;

    } else {

        echo "Data gagal dihapus";

    }

} else {

    echo "ID tidak ditemukan";

}
?>