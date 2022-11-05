<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_pem = isset($_POST['id_pem']) ? $_POST['id_pem'] : '';
  $nama_pem = isset($_POST['nama_pem']) ? $_POST['nama_pem'] : '';
  $nidn = isset($_POST['nidn']) ? $_POST['nidn'] : '';
  $jk_pem = isset($_POST['jk_pem']) ? $_POST['jk_pem'] : '';
  $nohp_pem = isset($_POST['nohp_pem']) ? $_POST['nohp_pem'] : '';
  $alamat_pem = isset($_POST['alamat_pem']) ? $_POST['alamat_pem'] : '';
  
 
 
  $query  = "UPDATE pembimbing SET nama_pem = '$nama_pem', nidn = '$nidn', jk_pem = '$jk_pem', nohp_pem = '$nohp_pem', alamat_pem = '$alamat_pem'";
  $query .= "WHERE id_pem = '$id_pem'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../pembimbing.php';</script>";
  }
              

 