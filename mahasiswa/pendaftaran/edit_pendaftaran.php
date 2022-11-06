<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_mhs = isset($_POST['id_mhs']) ? $_POST['id_mhs'] : '';
  $nama_mhs = isset($_POST['nama_mhs']) ? $_POST['nama_mhs'] : '';
  $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
  $jk_mhs = isset($_POST['jk_mhs']) ? $_POST['jk_mhs'] : '';
  $nohp_mhs = isset($_POST['nohp_mhs']) ? $_POST['nohp_mhs'] : '';
  $prodi= isset($_POST['prodi']) ? $_POST['prodi'] : '';
  $alamat_mhs = isset($_POST['alamat_mhs']) ? $_POST['alamat_mhs'] : '';
  
 
 
  $query  = "UPDATE mahasiswa SET nama_mhs = '$nama_mhs', nim = '$nim', jk_mhs = '$jk_mhs', nohp_mhs = '$nohp_mhs', prodi = '$prodi', alamat_mhs = '$alamat_mhs'";
  $query .= "WHERE id_mhs = '$id_mhs'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../mahasiswa.php';</script>";
  }
              

 