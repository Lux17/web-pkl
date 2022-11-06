<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_daftar = isset($_POST['id_daftar']) ? $_POST['id_daftar'] : '';
  $nama_mhs = isset($_POST['nama_mhs']) ? $_POST['nama_mhs'] : '';
  $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
  $prodi= isset($_POST['prodi']) ? $_POST['prodi'] : '';
  $nohp_mhs = isset($_POST['nohp_mhs']) ? $_POST['nohp_mhs'] : '';
  $nama_pem = isset($_POST['nama_pem']) ? $_POST['nama_pem'] : '';
  $nohp_pem = isset($_POST['nohp_pem']) ? $_POST['nohp_pem'] : '';
  $nama_inst = isset($_POST['nama_inst']) ? $_POST['nama_inst'] : '';
  $alamat_inst = isset($_POST['alamat_inst']) ? $_POST['alamat_inst'] : '';
  $nohp_inst = isset($_POST['nohp_inst']) ? $_POST['nohp_inst'] : '';

  $query  = "UPDATE pendaftaran SET nama_mhs = '$nama_mhs', nim = '$nim', nohp_mhs = '$nohp_mhs', prodi = '$prodi', nohp_pem ='$nohp_pem', nama_pem ='$nama_pem', nama_inst = '$nama_inst', alamat_inst = '$alamat_inst', nohp_inst ='$nohp_inst'";
  $query .= "WHERE id_daftar = '$id_daftar'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../data_peserta.php';</script>";
  }
              

 