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
	$query = "SELECT * FROM pendaftaran WHERE kode_daftar like '%".$kata_cari2."%' ";
    $result = mysqli_query($kon, $query); 
    $row = mysqli_fetch_assoc($result);
   }else{

   };

   ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registrasi PKL- Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/img/favicon1.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon">
                    <img src="../assets/img/favicon1.png" alt="" width="43" height="45" class="d-inline-block align-text-top">
                </div>
                <div class="sidebar-brand-text mx-3">Registrasi PKL</div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                
                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>
                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="mahasiswa.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Mahasiswa</span></a>
                </li>

                <!-- Nav Item - Tables -->
                <li class="nav-item">
                    <a class="nav-link" href="pembimbing.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Pembimbing</span></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="instansi.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Instansi</span></a>
                </li>

  
                <li class="nav-item">
                        <a class="nav-link" href="data_peserta.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Data peserta PKL</span></a>
                    </li>
                <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>
                <li class="nav-item">
                        <a class="nav-link" href="form_pendaftaran.php">
                            <i class="fas fa-fw fa-table"></i>
                            <span>Form Pendaftaran PKL</span></a>
                    </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

      

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                       

                        
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">                               
                                 <?php
                                echo $_SESSION['username'];
                                ?>
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                   Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


<!-- 
    <form class="row g-6">            
    <div class="col-md-2">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-3">
  <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-3">
  <label for="inputCity" class="form-label"></label>
  <button type="carimhs" class="btn ">Cari</button>
  </div>
</form> -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success">Form Pendaftaran PKL</h6>
                        </div>

                
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                         <!-- Button trigger modal -->

                    <div class="modal-body">
 
                 

            <form method="POST" action="pendaftaran/tambah_pendaftaran.php" enctype="multipart/form-data">
                                          
            <div class="row mb-3">
            <section class="base align-items-center ">
                            <label for="kode_daftar" class="col-sm-2 col-form-label">Kode Daftar</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="kode_daftar" />
                            </div>
                            </div>

               

                            <!-- <div class="row mb-3">
                            <label for="NIM" class="col-sm-2 col-form-label" >NIM</label>
                            <div class="col-sm-5">
                            <form method="GET" action="#" style="text-align: center;">
                            <input type="text" class="form-control" name="kata_cari" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
                            <button type="submit" class="btn btn-primary">Cari</button>
                             </form>
                            </div>
                            </div>
                         -->

                            <div class="row mb-3">
                            <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nim" value="<?php echo $row['nim']; ?> " autofocus=""  />
                            </div>
                            </div>
                            
                            <div class="row mb-3">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_mhs" value="<?php echo $row['nama_mhs']; ?> " autofocus=""  />
                            </div>
                            </div>

                            
                            <div class="row mb-3">
                            <label for="nohp_mhs" class="col-sm-2 col-form-label">NO HP</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nohp_mhs" value="<?php echo $row['nohp_mhs']; ?>"  />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="Prodi" class="col-sm-2 col-form-label">Prodi</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="prodi" value="<?php echo $row['prodi']; ?> " />
                            </div>
                            </div>

                            
                            <div class="row mb-3">
                            <label for="nama_pem" class="col-sm-2 col-form-label">Nama Pembimbing</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_pem" required=""  />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="nohp_pem" class="col-sm-2 col-form-label">No HP Pembimbing</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nohp_pem"  />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="nama_inst" class="col-sm-2 col-form-label">Nama Instansi</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nama_inst"  />
                            
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="alamat_inst" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="alamat_inst" />
                            </div>
                            </div>

               

                            <div class="row mb-3">
                            <label for="nohp_inst" class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-5">
                            <input type="text" class="form-control" name="nohp_inst" />
                            </div>
                            </div>
                        </section>
                        </form>

                        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
                            </div>


            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Lucky Saputra</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Keluar" jika anda ingin mengakhiri sesi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="logout.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>