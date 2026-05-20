<?php
include 'admin/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari hidden input form pembayaran
    $id_pemesanan = mysqli_real_escape_string($konek, $_POST['id_pemesanan']);
    $total        = mysqli_real_escape_string($konek, $_POST['total']);

    // Ambil data file bukti transfer
    $nama_file   = $_FILES['bukti']['name'];
    $tmp_name    = $_FILES['bukti']['tmp_name'];
    $error_file  = $_FILES['bukti']['error'];

    // Validasi apakah user sudah memilih file
    if ($error_file === 4) {
        echo "<script>alert('Harap unggah bukti pembayaran terlebih dahulu!'); window.history.back();</script>";
        exit;
    }

    // Mengamankan nama file unik agar tidak bentrok saat di-upload
    $ekstensi_valid = ['jpg', 'jpeg', 'png'];
    $ekstensi_file  = explode('.', $nama_file);
    $ekstensi_file  = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $ekstensi_valid)) {
        echo "<script>alert('Format file harus JPG, JPEG, atau PNG!'); window.history.back();</script>";
        exit;
    }

    $nama_file_baru = uniqid() . '.' . $ekstensi_file;
    $folder_tujuan  = 'asset/' . $nama_file_baru;

    // Proses pindah file dan simpan ke database
    if (move_uploaded_file($tmp_name, $folder_tujuan)) {
        // Query disesuaikan dengan struktur tabel 'pembayaran' Anda (total, bukti, id)
        $sql_pembayaran = "INSERT INTO pembayaran (total, bukti, id) VALUES ('$total', '$nama_file_baru', '$id_pemesanan')";

        if (mysqli_query($konek, $sql_pembayaran)) {
            echo "<script>
                    alert('Pembayaran Berhasil Dikonfirmasi! Pesanan Anda sedang diproses.');
                    window.location.href = 'index.php';
                  </script>";
        } else {
            echo "Gagal menyimpan data pembayaran: " . mysqli_error($konek);
        }
    } else {
        echo "<script>alert('Gagal mengunggah gambar ke server.'); window.history.back();</script>";
    }
} else {
    header("Location: index.php");
    exit;
}
?>