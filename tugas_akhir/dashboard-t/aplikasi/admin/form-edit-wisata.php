<?php
 session_start();
 include "../../koneksi/koneksi.php"; 
 if($_SESSION['username_user']=='')
 {
   header("location:login.php");
 }
 $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../../assets/img/favicon.ico" type="image/x-icon">


  <title>Dashboard - Edit Wisata</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/vendor/fontawesome/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/fonts-googleapis.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="../assets/css/uploads-image.css">
</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?php include 'sidebar.php'; ?>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <?php include 'topbar.php'; ?>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li>
              <a href="dashboard.php">
                <em class="fa fa-home"></em>
              </a>
            </li>
            <li><a href="dashboard.php"><b>Data Wisata</b></a> / Edit Wisata</li>
          </ol> 
          <!-- Page Heading -->                 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
              <h6 class="m-0 font-weight-bold text-primary">Form Edit Wisata</h6>
            </a>
                <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
              <div class="card-body">
                <?php 
                  $data=mysqli_query($koneksi,"SELECT * from tb_lokasi WHERE id='$id' group by id");
                  while ($r=mysqli_fetch_array($data)){       
                ?>

                <form action="pro-edit-wisata.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <input class="form-control" type="hidden" name="id" placeholder="ID" value="<?php echo $id; ?>" readonly/>
                  
                  <div class="form-group">
                    <label class="col-lg-9">Nama Wisata</label>
                      <div class="col-lg-6">
                        <input class="form-control form-control-user" placeholder="Masukkan Nama Barang" type="varchar" value="<?php echo $r['nama']; ?>" name="nama" required="">
                      </div>
                  </div>
                  <input class="form-control" type="hidden" name="gambar" placeholder="ID" value="<?php echo $gambar; ?>" readonly/>
                  <div class="form-group">
                    <label class="col-lg-9">Kategori Wisata</label>
                      <div class="col-lg-6">
                        <input class="form-control form-control-user" placeholder="Masukkan Kategori" type="varchar" value="<?php echo $r['kategori']; ?>" name="kategori" required="" readonly>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Lokasi Wisata</label>
                      <div class="col-lg-6">
                        <textarea class="form-control form-control-user" placeholder="Masukkan Kategori Wisata" name="lokasi" required=""><?php echo $r['lokasi']; ?></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Rating</label>
                      <div class="col-lg-6">
                        <input class="form-control form-control-user" placeholder="Masukkan Rating" type="varchar" value="<?php echo $r['rate']; ?>" name="rate" required="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Kisaran Harga</label>
                      <div class="col-lg-6">
                        <input class="form-control form-control-user" placeholder="Masukkan Kisaran Harga" type="varchar" value="<?php echo $r['kisaran_harga']; ?>" name="kisaran_harga" required="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Jam Operasional</label>
                      <div class="col-lg-6">
                        <input class="form-control form-control-user" placeholder="Masukkan Jam Operasional" type="varchar" value="<?php echo $r['jam_buka']; ?>" name="jam_buka" required="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Latitude</label>
                      <div class="col-lg-6">
                      <input class="form-control form-control-user" placeholder="Masukkan Latitude" type="varchar" value="<?php echo $r['latitude']; ?>" name="latitude" required="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Longitude</label>
                      <div class="col-lg-6">
                      <input class="form-control form-control-user" placeholder="Masukkan Longitude" type="varchar" value="<?php echo $r['longitude']; ?>" name="longitude" required="">
                      </div>
                  </div>
                  <input class="form-control" type="hidden" name="redirect_link" placeholder="ID" value="<?php echo $redirect_link; ?>" readonly/>
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </div>
                </form>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'footer.php';  ?>
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
  <?php include 'logout-modal.php'; ?>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>
</body>

</html>
