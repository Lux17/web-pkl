<?php
include 'koneksi.php';
$id = $_GET["id"];
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM pengumuman WHERE id_pengumuman='$id' ";
    $hasil_query = mysqli_query($kon, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($kon).
       " - ".mysqli_error($kon));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../pengumuman.php';</script>";
    }
?>