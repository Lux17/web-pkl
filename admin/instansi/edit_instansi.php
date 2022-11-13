<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_inst = isset($_POST['id_inst']) ? $_POST['id_inst'] : '';
  $nama_inst = isset($_POST['nama_inst']) ? $_POST['nama_inst'] : '';
  $nohp_inst = isset($_POST['nohp_inst']) ? $_POST['nohp_inst'] : '';
  $alamat_inst = isset($_POST['alamat_inst']) ? $_POST['alamat_inst'] : '';
  
 
 
  $query  = "UPDATE instansi SET nama_inst = '$nama_inst', nohp_inst = '$nohp_inst', alamat_inst = '$alamat_inst'";
  $query .= "WHERE id_inst = '$id_inst'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../instansi.php';</script>";
  }
              

 