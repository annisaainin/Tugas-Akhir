<?php
include "../../koneksi/koneksi.php"; 
session_start();

if($_SESSION['username_user']=='')
{
  header("location:login.php");
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
  <link rel="shortcut icon" href="../../../assets/img/favicon.ico" type="image/x-icon">


  <title>Data Wisata</title>

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
              <a href="data-barang.php">
                <em class="fa fa-home"></em>
              </a>
            </li>
            <li><a href="data-masuk.php"><b>Data Wisata</b></a> / Deskripsi Konten</li>
          </ol> 
          <!-- Page Heading -->                 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Deskripsi</h6>
            </a>
                <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
              <div class="card-body">
                <form action="pro-tambah-data-konten.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                   $kode = 'KT';
                   $query = mysqli_query($koneksi,"SELECT MAX(id_konten) as idnew FROM tb_konten");
                   $row = mysqli_fetch_array($query);
      
                   $max_id = $row['idnew'];
                   $max_ids = (int) substr($max_id,5,5);
                   $id_konten = $max_ids+1;
                   $auto = $kode.sprintf("%05s", $id_konten);
                  ?>
                  <input class="form-control" type="hidden" name="id_konten" placeholder="ID" value="<?php echo $auto; ?>" readonly />                                  
                  <div class="form-group">
                    <label class="col-lg-9">Nama Wisata</label>
                      <div class="col-lg-6">
                        <select class="form-control" name="id"  required>
                          <option value=""> --- Pilih Wisata --- </option>
                              <?php
                                include "../../koneksi/koneksi.php";
                                $query = mysqli_query($koneksi,"SELECT * FROM tb_lokasi");
                                  while ($data=mysqli_fetch_array($query)){
                                  ?>
                                  <option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?></option>
                                  <?php
                                  }
                                ?>
                            </select>
                      </div>
                  </div> 
                  <div class="form-group">
                    <label class="col-lg-9">Deskripsi</label>
                      <div class="col-lg-6">
                      <textarea class="form-control form-control-user" placeholder="Masukkan Deskripsi" name="deskripsi" rows="4" cols="50" required=""></textarea>
                      </div>
                  </div>   
                  <div class="form-group">
                    <label class="col-lg-9">Gambar 1</label>
                      <div class="col-lg-6">
                      <input type="file" name="file_gambar_1" style="display:block">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Gambar 2</label>
                      <div class="col-lg-6">
                      <input type="file" name="file_gambar_2" style="display:block">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Gambar 3</label>
                      <div class="col-lg-6">
                      <input type="file" name="file_gambar_3" style="display:block">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Gambar 4</label>
                      <div class="col-lg-6">
                      <input type="file" name="file_gambar_4" style="display:block">
                      </div>
                  </div>                   
                  <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                  </div>
                </form>
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
