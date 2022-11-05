<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
$id_mhs = isset($_POST['id_mhs']) ? $_POST['id_mhs'] : '';
$nama_mhs = isset($_POST['nama_mhs']) ? $_POST['nama_mhs'] : '';
$nim = isset($_POST['nim']) ? $_POST['nim'] : '';
$jk_mhs = isset($_POST['jk_mhs']) ? $_POST['jk_mhs'] : '';
$nohp_mhs = isset($_POST['nohp_mhs']) ? $_POST['nohp_mhs'] : '';
$prodi= isset($_POST['prodi']) ? $_POST['prodi'] : '';
$alamat_mhs = isset($_POST['alamat_mhs']) ? $_POST['alamat_mhs'] : '';

$query = "INSERT INTO mahasiswa (nama_mhs, nim, jk_mhs, nohp_mhs, prodi,alamat_mhs) VALUES ('$nama_mhs', '$nim', '$jk_mhs', '$nohp_mhs', '$prodi','$alamat_mhs')";
$result = mysqli_query($kon, $query);
                  // periska query apakah ada error
// $jumlah = mysqli_num_rows($result);

if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                       " - ".mysqli_error($kon));
} else {                      
echo "<script>alert('Data berhasil ditambah.');window.location='../mahasiswa.php';</script>";
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




