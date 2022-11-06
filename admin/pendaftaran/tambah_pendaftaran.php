<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	


// cek nis
if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
   
    $query = mysqli_query($kon, "SELECT nim FROM pendaftaran WHERE nim = '$nim'"); 
   
    if($query->num_rows > 0) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../form_pendaftaran.php';</script>";
    } else {
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
        
        $query = "INSERT INTO pendaftaran(nama_mhs, nim, nohp_mhs,prodi,nama_pem, nohp_pem, nama_inst, alamat_inst,nohp_inst ) VALUES ('$nama_mhs', '$nim','$nohp_mhs', '$prodi','$nama_pem',  '$nohp_pem', '$nama_inst','$alamat_inst','$nohp_inst')";
        $result = mysqli_query($kon, $query);
                          // periska query apakah ada error
        // $jumlah = mysqli_num_rows($result);
        
        if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                               " - ".mysqli_error($kon));
        } else {                      
        echo "<script>alert('Data berhasil ditambah.');window.location='../data_peserta.php';</script>";
        }
                    
        
    }
};


// if ($jumlah>0) {
// 	$row = mysqli_fetch_assoc($hasil);
// 	$_SESSION['id'] = $data['id'];
// 	$_SESSION['nama'] = $username;
// 	$_SESSION['no_anggota'] = $nomer;
//     $_SESSION['lahir'] = $lahir;
// 	$_SESSION['nomer_hp'] = $nomer;
//     $_SESSION['prodi'] = $prodi;
// 	$_SESSION['alamat'] = $alamat;
//     $_SESSION['jabatan'] = $jabatan;
//     echo "<script>alert('Data berhasil ditambah.');window.location='../anggota.php';</script>";

// else{
//     echo "<script>alert('Data Gagal ditambah.');</script>";
// }




