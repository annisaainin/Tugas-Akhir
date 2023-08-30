<?php
 session_start();
 include "../../koneksi/koneksi.php"; 
 if($_SESSION['username_user']=='')
 {
   header("location:login.php");
 }
 $id_konten = $_GET['id_konten'];
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


  <title>Dashboard - Edit Konten Wisata</title>

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
            <li><a href="dashboard.php"><b>Data Wisata</b></a> / Edit Konten Wisata</li>
          </ol> 
          <!-- Page Heading -->                 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
              <h6 class="m-0 font-weight-bold text-primary">Form Edit Konten Wisata</h6>
            </a>
                <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
              <div class="card-body">
                <?php 
                  $data=mysqli_query($koneksi,"SELECT * FROM tb_konten b INNER JOIN tb_lokasi j ON b.id = j.id WHERE id_konten='$id_konten' group by b.id_konten");
                  while ($r=mysqli_fetch_array($data)){       
                ?>

                <form action="pro-edit-konten.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  <input class="form-control" type="hidden" name="id_konten" placeholder="ID" value="<?php echo $id_konten; ?>" readonly/>
                  
                  <div class="form-group">
                    <label class="col-lg-9">Nama Wisata</label>
                      <div class="col-lg-6">
                        <input class="form-control form-control-user" placeholder="Masukkan Nama Barang" type="varchar" value="<?php echo $r['nama']; ?>" name="nama" required="" readonly>
                      </div>
                  </div>
                  <input class="form-control" type="hidden" name="gambar" placeholder="ID" value="<?php echo $gambar; ?>" readonly/>
                  <div class="form-group">
                    <label class="col-lg-9">Deskripsi</label>
                      <div class="col-lg-6">
                        <textarea class="form-control form-control-user" style="height: 250px;" placeholder="Masukkan Deskripsi" name="deskripsi" required=""><?php echo $r['deskripsi']; ?></textarea>
                      </div>
                  </div>                  
                  <input class="form-control" type="hidden" name="gambar_1" placeholder="ID" value="<?php echo $gambar_1; ?>" readonly/>
                  <input class="form-control" type="hidden" name="gambar_2" placeholder="ID" value="<?php echo $gambar_2; ?>" readonly/>
                  <input class="form-control" type="hidden" name="gambar_3" placeholder="ID" value="<?php echo $gambar_3; ?>" readonly/>
                  <input class="form-control" type="hidden" name="gambar_3" placeholder="ID" value="<?php echo $gambar_3; ?>" readonly/>
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
