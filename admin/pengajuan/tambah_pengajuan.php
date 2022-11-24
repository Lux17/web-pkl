<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';
session_start();	

if (isset($_POST['simpan'])) {
    $nim = $_POST['nim'];
   
    $query = mysqli_query($kon, "SELECT nim FROM pendaftaran WHERE nim = '$nim'"); 
   
    if($query->num_rows > 0 ) {
        echo "<script>alert('Gagal !! Data sudah Terdaftar');window.location='../daftar.php';</script>";
    } else {
    $id_daftar = isset($_POST['id_daftar']) ? $_POST['id_daftar'] : '';
    $id = isset($_POST['id_ajukan']) ? $_POST['id_ajukan'] : '';
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

    if(!$result){
        die ("Query gagal dijalankan: ".mysqli_errno($kon).
                                        " - ".mysqli_error($kon));
    } else {                      
    echo "<script>alert('Data berhasil ditambah.');window.location='../daftar.php';</script>";


    $id = $_GET["id"];

    //mengambil id yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM pengajuan WHERE id_ajukan='$id' ";
    $hasil_query = mysqli_query($kon, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($kon).
       " - ".mysqli_error($kon));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='../daftar.php';</script>";
    }
    
}
    }
}else if(isset($_POST['cetak'])){

    
    $nama_mhs = $_POST['nama_mhs'];
    $nim = $_POST['nim'];
    $prodi= $_POST['prodi'];
    $nohp_mhs = $_POST['nohp_mhs'];
    $nama_inst = $_POST['nama_inst'];
    $alamat_inst = $_POST['alamat_inst'];
    
    function tanggal_indonesia($tanggal){

	$bulan = array (
		1 =>   	'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
		);

		$var = explode('-', $tanggal);

		return $var[2] . ' ' . $bulan[ (int)$var[1] ] . ' ' . $var[0];
		// var 0 = tanggal
		// var 1 = bulan
		// var 2 = tahun
}

    $titimangsa = tanggal_indonesia(date('Y-m-d'));

    

    $file = "Surat Pengajuan PKL.rtf"; 
    // memanggil dan membaca template dokumen yang telah kita buat
    $document = file_get_contents($file);
    // isi dokumen dinyatakan dalam bentuk string
    // $document = str_replace("#nomer", $nomer, $document);
    $document = str_replace("#mahasiswa", $nama_mhs, $document);
    $document = str_replace("#nim", $nim, $document);
    $document = str_replace("#prodi", $prodi, $document);
    $document = str_replace("#namainst", $nama_inst, $document);
    $document = str_replace("#alamat", $alamat_inst, $document);
    $document = str_replace("#titimangsa", $titimangsa, $document);
    $document = str_replace("#hp", $nohp_mhs, $document);


    // header untuk membuka file output RTF dengan MS. Word
    // $doc = str_replace(".rtf",".docx", $file); 
    header("Content-type: application/msword");
    header("Content-disposition: inline; filename=$file");
    header("Content-length: ".strlen($document));
    echo $document;
}



