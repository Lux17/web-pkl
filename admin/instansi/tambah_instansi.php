<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	

$id_inst = isset($_POST['id_inst']) ? $_POST['id_inst'] : '';
$kodeinst = isset($_POST['kodeinst']) ? $_POST['kodeinst'] : '';
$nama_inst = isset($_POST['nama_inst']) ? $_POST['nama_inst'] : '';
$nohp_inst = isset($_POST['nohp_inst']) ? $_POST['nohp_inst'] : '';
$alamat_inst = isset($_POST['alamat_inst']) ? $_POST['alamat_inst'] : '';

$query = "INSERT INTO instansi (kodeinst,nama_inst,nohp_inst, alamat_inst) VALUES ('$kodeinst','$nama_inst', '$nohp_inst', '$alamat_inst')";
$result = mysqli_query($kon, $query);
                  // periska query apakah ada error
// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../instansi.php';</script>";
}
            



