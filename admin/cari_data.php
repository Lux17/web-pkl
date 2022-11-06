<?php
function cari_mhs(){

    $cari_mhs = ($_GET["id_daftar"]);
    $query = "SELECT * FROM mahasiswa WHERE nim LIKE '$cari_mhs'";
    $result = mysqli_query($kon, $query);   
   

};

function cari_inst(){
    $cari_inst = ($_GET["id_daftar"]);
    $query = "SELECT * FROM instansi WHERE kode_inst LIKE '$id_daftar'";
    $result = mysqli_query($kon, $query);   
};

function cari_pem(){
    $cari_pem= ($_GET["id_daftar"]);
    $query = "SELECT * FROM pembimbing WHERE nidn LIKE '$cari_pem'";
    $result = mysqli_query($kon, $query);   
};

function cari_daftar(){
    $cari_daftar = ($_GET["id_daftar"]);
    $query = "SELECT * FROM pendaftaran WHERE kode_daftar LIKE '$cari_daftar'";
    $result = mysqli_query($kon, $query);   
};

?>