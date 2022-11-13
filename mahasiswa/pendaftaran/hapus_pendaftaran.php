<?php
include 'koneksi.php';
$id = $_GET["id"];
var_dump($id_ajukan);
//mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM pengajuan WHERE id_ajukan='$id' ";
    $hasil_query = mysqli_query($kon, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($kon).
       " - ".mysqli_error($kon));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../daftar.php';</script>";
    }
?>