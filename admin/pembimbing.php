<?php
  include('../koneksi.php'); 
  session_start();
  

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id_pem'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id_pem = ($_GET["id_pem"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM pembimbing WHERE id_pem='$id_pem'";
    $result = mysqli_query($kon, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($kon).
         " - ".mysqli_error($kon));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);

  }         
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi & Registrasi PKL- Dashboard</title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="../assets/img/faviconumc.png" rel="icon">
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
    <ul class="navbar-nav bg-gradient-danger  sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div class="sidebar-brand-icon">
                <img src="../assets/img/faviconumc.png" alt="" width="43" height="45" class="d-inline-block align-text-top">
            </div>
            <div class="sidebar-brand-text mx-3">SI & Reg PKL </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
        
        <!-- Heading -->
        <div class="sidebar-heading">
            Data
        </div>
        
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="mahasiswa.php">
                <i class="fas fa-fw fa-user"></i>
                <span>Mahasiswa</span></a>
        </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="pembimbing.php">
                    <i class="fas fa-fw fa-user-graduate"></i>
                    <span>Pembimbing</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="instansi.php">
                    <i class="fas fa-fw fa-landmark"></i>
                    <span>Instansi</span></a>
            </li>
        <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item ">
                    <a class="nav-link" href="data_peserta.php">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Peserta PKL</span></a>
                </li>
            <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Kelola
        </div>
            <li class="nav-item">
                    <a class="nav-link" href="daftar.php">
                        <i class="fas fa-fw fa-clipboard-check"></i>
                        <span>Pengajuan PKL</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="pengumuman.php">
                        <i class="fas fa-fw fa-bell"></i>
                        <span>Pengumuman</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="users.php">
                        <i class="fas fa-fw fa-user-circle"></i>
                        <span>Akun</span></a>
                </li>

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
                                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a> -->
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
                    <h1 class="h3 mb-2 text-gray-800">Pembimbing</h1>
                    <p class="mb-4">Daftar List Pembimbing .</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-danger">Data Tabel Pembimbing</h6>
                        </div>

                
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                         <!-- Button trigger modal -->


<div class="d-sm-flex align-items-center justify-content-between mb-4">
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Tambah Pembimbing
</button>
                
                    </div>
                    <a href="export_pem.php" class="d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Download</a>

   


<!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Pembimbing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="pembimbing/tambah_pembimbing.php" enctype="multipart/form-data" >
                        <section class="base align-items-center ">
                            <div class="row mb-3">
                            <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_pem" autofocus="" required=""  />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nidn" />
                            </div>
                            </div>

                            <div class="row mb-3">
                            <label class="col-sm-2"> JK</label>
                            <div class="input-group col-sm-10">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jk_pem" >
                                 
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option  value="Perempuan">Perempuan</option>
                                </select>
                                <div class="input-group-append">
                            </div>
                            </div>
                            </div>
                            
                            <div class="row mb-3">
                            <label for="nohp_pem" class="col-sm-2 col-form-label">NO HP</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="nohp_pem" required="" />
                            </div>
                            </div>

        

                            <div class="row mb-3">
                            <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat_pem" required="" />
                            </div>
                            </div>

      
                            
                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" name = "simpan" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
        </div>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIDN</th>
                                            <th>Jenis kelamin</th>
                                            <th>Nomer HP</th>
                                            <th>Alamat</th>
                                        
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>No</th>
                                            <th>Nama</th>
                                            <th>NIDN</th>
                                            <th>Jenis kelamin</th>
                                            <th>Nomer HP</th>
                                            <th>Alamat</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                           
                                    // jalankan query untuk menampilkan semua data diurutkan berdasarkan 
                                    $query = "SELECT * FROM pembimbing ORDER BY id_pem ASC";
                                    $result = mysqli_query($kon, $query);
                                    //mengecek apakah ada error ketika menjalankan query
                                    if(!$result){
                                        die ("Query Error: ".mysqli_errno($kon).
                                        " - ".mysqli_error($kon));
                                    }

                                    //buat perulangan untuk element tabel dari data pembimbing
                                    $no = 1; //variabel untuk membuat nomor urut
                                    // hasil query akan disimpan dalam variabel $data dalam bentuk array
                                    // kemudian dicetak dengan perulangan while
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                    ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama_pem']; ?></td>
                                        <td><?php echo $row['nidn']; ?></td>
                                        <td><?php echo $row['jk_pem']; ?></td>
                                        <td><?php echo $row['nohp_pem']; ?></td>
                                        <td><?php echo substr($row['alamat_pem'], 0, 20); ?>...</td>
                                        
                                       
                                
                                        

                                        <td>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal<?php echo $row['id_pem'];?>">
                            Ubah
                            </button>
   
        <div class="modal fade" id="exampleModal<?php echo $row['id_pem'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Pembimbing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form method="POST" action="pembimbing/edit_pembimbing.php" enctype="multipart/form-data" >
            
                        <section class="base align-items-center ">
                        <div>
                            <input type="hidden" value="<?php echo $row['id_pem']; ?>" name="id_pem" required="" />
                        </div>
                        <div class="row mb-3">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $row['nama_pem']; ?>" name="nama_pem" autofocus="" required="" />
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="No CE" class="col-sm-2 col-form-label">nidn</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $row['nidn']; ?>"  name="nidn" required="" />
                        </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label class="col-sm-2"> JK</label>
                            <div class="input-group col-sm-10">
                                <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon" name="jk_pem" >
                                    <option selected ><?php echo $row['jk_pem']; ?></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option  value="Perempuan">Perempuan</option>
                                </select>
                                <div class="input-group-append">
                            </div>
                            </div>
                            </div>
                        
                        <div class="row mb-3">
                        <label for="Alamat" class="col-sm-2 col-form-label">NO HP</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $row['nohp_pem']; ?>" name="nohp_pem" required="" />
                        </div>
                        </div>

                        <div class="row mb-3">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $row['alamat_pem']; ?>" name="alamat_pem" required="" />
                        </div>
                        </div>


           

                        </section>
                        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
            </div>
        </div>
        </div>
                                        |
                                            <a href="pembimbing/hapus_pembimbing.php?id=<?php echo $row['id_pem']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>
                                        
                                    <?php
                                        $no++; //untuk nomor urut terus bertambah 1
                                    }
                                    ?>
                                    </tbody>
                                </table>
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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>