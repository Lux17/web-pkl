<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_daftar = isset($_POST['id_ajukan']) ? $_POST['id_ajukan'] : '';
  $nama_mhs = isset($_POST['nama_mhs']) ? $_POST['nama_mhs'] : '';
  $nim = isset($_POST['nim']) ? $_POST['nim'] : '';
  $prodi= isset($_POST['prodi']) ? $_POST['prodi'] : '';
  $nohp_mhs = isset($_POST['nohp_mhs']) ? $_POST['nohp_mhs'] : '';
  $nama_inst = isset($_POST['nama_inst']) ? $_POST['nama_inst'] : '';
  $alamat_inst = isset($_POST['alamat_inst']) ? $_POST['alamat_inst'] : '';
  $nohp_inst = isset($_POST['nohp_inst']) ? $_POST['nohp_inst'] : '';

  $query  = "UPDATE pengajuan SET nama_mhs = '$nama_mhs', nim = '$nim', nohp_mhs = '$nohp_mhs', prodi = '$prodi',  nama_inst = '$nama_inst', alamat_inst = '$alamat_inst', nohp_inst ='$nohp_inst'";
  $query .= "WHERE id_ajukan = '$id_daftar'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../daftar.php';</script>";
  }
              

 