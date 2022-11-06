<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
$judul = isset($_POST['judul']) ? $_POST['judul'] : '';
$isi = isset($_POST['isi']) ? $_POST['isi'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';


$query = "INSERT INTO pengumuman (judul, isi, tanggal) VALUES ('$judul', '$isi', '$tanggal')";
$result = mysqli_query($kon, $query);
                  // periska query apakah ada error
// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../pengumuman.php';</script>";
}
            

// if ($jumlah>0) {
// 	$row = mysqli_fetch_assoc($hasil);
// 	$_SESSION['id'] = $data['id'];
// 	$_SESSION['nama'] = $username;
// 	$_SESSION['no_anggota'] = $nomer;
//     $_SESSION['lahir'] = $lahir;
// 	$_SESSION['nomer_hp'] = $nomer;
//     $_SESSION['prodi'] = $prodi;
// 	$_SESSION['alamat'] = $alamat;
//     $_SESSION['jabatan'] = $jabatan;
//     echo "<script>alert('Data berhasil ditambah.');window.location='../anggota.php';</script>";

// else{
//     echo "<script>alert('Data Gagal ditambah.');</script>";
// }




