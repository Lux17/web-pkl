<?php
include ('../koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Computer Education- Dashboard</title>

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
                <div class="sidebar-brand-text mx-3">Registrasi PKL </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item s">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="profile.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Profil</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="nilai.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Nilai</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="bimbingan.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Bimbingan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="mahasiswa.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Mahasiswa</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            
            <!-- Nav Item - Charts -->
   
            

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

                    <!-- Page Heading -->
     
   
     
                                <!-- Card Body -->
                                <div class="card-body">
                          
                            </div>
                        </div>
                        <?php
                            $nidn = $_SESSION['username'];
                        
                           // jalankan query untuk menampilkan semua data diurutkan berdasarkan 
                           $query = "SELECT * FROM pembimbing WHERE nidn LIKE '$nidn'";
                           $result = mysqli_query($kon, $query);

                           
                           //mengecek apakah ada error ketika menjalankan query
                           if(!$result){
                               die ("Query Error: ".mysqli_errno($kon).
                               " - ".mysqli_error($kon));
                           }

                           //buat perulangan untuk element tabel dari data mahasiswa
                           $no = 1; //variabel untuk membuat nomor urut
                           // hasil query akan disimpan dalam variabel $data dalam bentuk array
                           // kemudian dicetak dengan perulangan while
                           while($row = mysqli_fetch_assoc($result))
                           {
                           ?>

                        <!-- Pie Chart -->
                        
                        <div class="col">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Profil</h6>
                                </div>
                                <div class="card-body">
                                    <p>Nama &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $row['nama_pem'];?> </p>
                                    <p >NIDN &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; :  <?php echo $row['nidn'];?></p>
                                    <p>Jenis kelamin &emsp;&emsp;&emsp;&emsp;&emsp;: <?php echo $row['jk_pem'];?> </p>
                                    <p>Nomer HP  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; : <?php echo $row['nohp_pem'];?> </p>
                                    <p>Alamat &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; : <?php echo $row['alamat_pem'];?> </p>
                                  

                                    <?php
                                        };
                                    ?>

                                    <?php
                                         $nidn = $_SESSION['username'];
                                        
                                        // jalankan query untuk menampilkan semua data diurutkan berdasarkan 
                                        $query = "SELECT * FROM pendaftaran WHERE nidn LIKE '$nidn'";
                                        $result = mysqli_query($kon, $query);

                                        
                                        //mengecek apakah ada error ketika menjalankan query
                                        if(!$result){
                                            die ("Query Error: ".mysqli_errno($kon).
                                            " - ".mysqli_error($kon));
                                        }

                                        //buat perulangan untuk element tabel dari data mahasiswa
                                        $no = 1; //variabel untuk membuat nomor urut
                                        // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                        // kemudian dicetak dengan perulangan while
                                        while($row = mysqli_fetch_assoc($result))
                                        {
                                        ?>
                                    <p>Mahasiswa &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: - <?php echo $row['nama_mhs'];?> </p>
                                    <?php
                                        };
                                    ?>
                                </div>
                            </div>
                                <!-- Card Body -->
            
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

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
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>