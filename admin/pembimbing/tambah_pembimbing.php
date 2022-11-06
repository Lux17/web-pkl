<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	
	
       

// cek nis
if (isset($_POST['simpan'])) {
    $nim = $_POST['nidn'];
   
    $query = mysqli_query($kon, "SELECT nidn FROM pembimbing WHERE nidn = '$nim'"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../pembimbing.php';</script>";
    } else {
        $id_pem = isset($_POST['id_pem']) ? $_POST['id_pem'] : '';
        $nama_pem = isset($_POST['nama_pem']) ? $_POST['nama_pem'] : '';
        $nidn = isset($_POST['nidn']) ? $_POST['nidn'] : '';
        $jk_pem = isset($_POST['jk_pem']) ? $_POST['jk_pem'] : '';
        $nohp_pem = isset($_POST['nohp_pem']) ? $_POST['nohp_pem'] : '';
        $alamat_pem = isset($_POST['alamat_pem']) ? $_POST['alamat_pem'] : '';
        
        $query = "INSERT INTO pembimbing (nama_pem, nidn, jk_pem, nohp_pem, alamat_pem) VALUES ('$nama_pem', '$nidn', '$jk_pem', '$nohp_pem', '$alamat_pem')";
        $result = mysqli_query($kon, $query);
                          // periska query apakah ada error
        // $jumlah = mysqli_num_rows($result);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../pembimbing.php';</script>";
        }
                    
        
    }
};



