<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	

    $id_inst = isset($_POST['id_inst']) ? $_POST['id_inst'] : '';
    $nama_inst = isset($_POST['nama_inst']) ? $_POST['nama_inst'] : '';
    $nohp_inst = isset($_POST['nohp_inst']) ? $_POST['nohp_inst'] : '';
    $alamat_inst = isset($_POST['alamat_inst']) ? $_POST['alamat_inst'] : '';
    
    $query = "INSERT INTO instansi (nama_inst,nohp_inst, alamat_inst) VALUES ('$nama_inst', '$nohp_inst', '$alamat_inst')";
    $result = mysqli_query($kon, $query);
                      // periska query apakah ada error
    // $jumlah = mysqli_num_rows($result);
    
    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                           " - ".mysqli_error($kon));
    } else {                      
    echo "<script>alert('Data berhasil ditambah.');window.location='../instansi.php';</script>";
    }

// // cek nis
// if (isset($_POST['simpan'])) {
//     $kode = $_POST['kodeinst'];
   
//     $query = mysqli_query($kon, "SELECT kodeinst FROM instansi WHERE kodeinst = '$kode'"); 
   
    
                   
                    
        
//     }
// };



