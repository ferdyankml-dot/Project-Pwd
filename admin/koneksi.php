
<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'project_pwd';

$konek = mysqli_connect($host, $user, $pass, $database);

if (!$konek) {
    die("Koneksi error : " . mysqli_connect_error());
}