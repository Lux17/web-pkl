<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_daftar = isset($_POST['id_daftar']) ? $_POST['id_daftar'] : '';
  $jdwl = isset($_POST['jdwl_bimbing']) ? $_POST['jdwl_bimbing'] : '';
  $jmlh = isset($_POST['jmlh_bimbingan']) ? $_POST['jmlh_bimbingan'] : '';

  
 
 
  $query  = "UPDATE pendaftaran SET jdwl_bimbing = '$jdwl', jmlh_bimbingan = '$jmlh'";
  $query .= "WHERE id_daftar = '$id_daftar'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../bimbingan.php';</script>";
  }
              

 