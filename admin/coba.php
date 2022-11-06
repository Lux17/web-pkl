

<?php
    include('../koneksi.php'); 
    
error_reporting(0); //tambahkan ini
    //jika kita klik cari, maka yang tampil query cari ini
    if(isset($_GET['kata_cari'])) {
    //menampung variabel kata_cari dari form pencarian
	$kata_cari = $_GET['kata_cari'];

	//jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
	//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
	$query = "SELECT * FROM mahasiswa WHERE nim like '%".$kata_cari."%' ";
    $result = mysqli_query($kon, $query); 
    $row = mysqli_fetch_assoc($result);
    // $d = mysqli_fetch_array($result);  
    } elseif(isset($_GET['kata_cari2'])) {
	//jika tidak ada pencarian, default yang dijalankan query ini
	$kata_cari = $_GET['kata_cari2'];

	//jika hanya ingin mencari berdasarkan kode_produk, silahkan hapus dari awal OR
	//jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM produk WHERE kode_produk like '%".$kata_cari."%' 
	$query = "SELECT * FROM pembimbing WHERE nidn like '%".$kata_cari2."%' ";
    $result = mysqli_query($kon, $query); 
    $row = mysqli_fetch_assoc($result);
   }else{
        echo"salah";
   };

   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="GET" action="#" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
                                    

	</form>

    
<form method="GET" action="#" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari2" value="<?php if(isset($_GET['kata_cari2'])) { echo $_GET['kata_cari2']; } ?>"  />
		<button type="submit">Cari</button>
                                    

	</form>


    <div class="row mb-3">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_mhs" value="<?php echo $row ['nama_mhs']; ?> " autofocus=""  />
                            </div>
                            </div>


                            <div class="row mb-3">
                            <label for="Nama" class="col-sm-2 col-form-label">Pembimbing</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_pem" value="<?php echo $row ['nama_pem']; ?> " autofocus=""  />
                            </div>
                            </div>

</body>
</html>