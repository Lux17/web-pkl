<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id = isset($_POST['id_pengumuman']) ? $_POST['id_pengumuman'] : '';
  $judul = isset($_POST['judul']) ? $_POST['judul'] : '';
  $isi = isset($_POST['isi']) ? $_POST['isi'] : '';
  $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';

 
 
  $query  = "UPDATE pengumuman SET judul = '$judul', isi = '$isi', tanggal = '$tanggal'";
  $query .= "WHERE id_pengumuman = '$id'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../pengumuman.php';</script>";
  }
              

 