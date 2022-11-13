<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

	// membuat variabel untuk menampung data dari form


  $id_daftar = isset($_POST['id_daftar']) ? $_POST['id_daftar'] : '';
  $disiplin = isset($_POST['nilai_disiplin']) ? $_POST['nilai_disiplin'] : '';
  $tjwb= isset($_POST['nilai_tjwb']) ? $_POST['nilai_tjwb'] : '';
  $inisiatif = isset($_POST['nilai_inisiatif']) ? $_POST['nilai_inisiatif'] : '';
  $loyal= isset($_POST['nilai_loyal']) ? $_POST['nilai_loyal'] : '';
  $kerja = isset($_POST['nilai_kerja']) ? $_POST['nilai_kerja'] : '';
  $kerjasama = isset($_POST['nilai_kerjasama']) ? $_POST['nilai_kerjasama'] : '';
  $keputusan= isset($_POST['nilai_keputusan']) ? $_POST['nilai_keputusan'] : '';
  $sikap = isset($_POST['nilai_sikap']) ? $_POST['nilai_sikap'] : '';
  $jujur = isset($_POST['nilai_jujur']) ? $_POST['nilai_jujur'] : '';
  $hasilkerja= isset($_POST['nilai_hasilkerja']) ? $_POST['nilai_hasilkerja'] : '';
  $penulisan = isset($_POST['nilai_penulisan']) ? $_POST['nilai_penulisan'] : '';
  $penelitian= isset($_POST['nilai_penelitian']) ? $_POST['nilai_penelitian'] : '';


  
 
 
  $query  = "UPDATE pendaftaran SET nilai_disiplin = '$disiplin', nilai_tjwb = '$tjwb', nilai_inisiatif = '$inisiatif', nilai_loyal = '$loyal', nilai_kerja = '$kerja', nilai_kerjasama = '$kerjasama', nilai_keputusan = '$keputusan',nilai_sikap = '$sikap', nilai_jujur = '$jujur', nilai_hasilkerja = '$hasilkerja', nilai_penulisan = '$penulisan', nilai_penelitian = '$penelitian'";
  $query .= "WHERE id_daftar = '$id_daftar'";
  $result = mysqli_query($kon, $query);
                    // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                         " - ".mysqli_error($kon));
  } else {                      
  echo "<script>alert('Data berhasil diubah.');window.location='../nilai.php';</script>";
  }
              

 