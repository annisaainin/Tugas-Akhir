<?php
session_start();
include "../../koneksi/koneksi.php"; 

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
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
	<script src="https://raw.githubusercontent.com/makinacorpus/Leaflet.TextPath/master/leaflet.textpath.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- JavaScript code -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
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
            <li><a href="data-masuk.php"><b>Data Wisata</b></a> / Tambah Wisata</li>
          </ol> 
          <!-- Page Heading -->                 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
              <!-- Card Header - Accordion -->
            <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Data Wisata</h6>
            </a>
                <!-- Card Content - Collapse -->
            <div class="collapse show" id="collapseCardExample">
              <div class="card-body">
                <form action="pro-tambah-data-wisata.php" class="form-horizontal" method="POST" enctype="multipart/form-data">
                  
                  <?php 
                  $kode = 'LK';
                  $query = mysqli_query($koneksi,"SELECT MAX(id) as idnew FROM tb_lokasi");
                  $row = mysqli_fetch_array($query);

                  $max_id = $row['idnew'];
                  $max_ids = (int) substr($max_id,5,5);
                  $id = $max_ids+1;
                  $auto = $kode.sprintf("%05s", $id);
                  ?>
                  <input class="form-control" type="hidden" name="id" placeholder="ID" value="<?php echo $auto; ?>" readonly />                                  
                  <div class="form-group">
                    <label class="col-lg-9">Nama Wisata</label>
                      <div class="col-lg-6">
                      <input class="form-control form-control-user" placeholder="Masukkan Nama Wisata" type="varchar" name="nama" required="">
                      </div>
                  </div> 
                  <div class="form-group">
                    <label class="col-lg-9">Gambar</label>
                      <div class="col-lg-6">
                      <input type="file" name="file_gambar" style="display:block">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Kategori</label>
                      <div class="col-lg-6">
                      <select class="form-control" name="kategori"  required>
                          <option value=""> --- Pilih Kategori --- </option>
                          <option value="Cafe atau Eatery">Cafe atau Eatery</option>
                          <option value="Kuliner Lokal">Kuliner Lokal</option>
                          <option value="Religi">Religi</option>
                          <option value="Edukasi">Edukasi</option>
                          <option value="Rekreasi atau Hiburan">Rekreasi atau Hiburan</option>
                          <option value="Event dan Kebudayaan">Event dan Kebudayaan</option>
                      </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Lokasi</label>
                      <div class="col-lg-6">
                      <input class="form-control form-control-user" placeholder="Masukkan Lokasi" type="varchar" name="lokasi" required="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Rating</label>
                      <div class="col-lg-6">
                      <input class="form-control form-control-user" placeholder="Masukkan Rating" type="varchar" name="rate" required="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Kisaran Harga</label>
                      <div class="col-lg-6">
                      <input class="form-control form-control-user" placeholder="Masukkan Harga" type="varchar" name="kisaran_harga" required="">
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="col-lg-9">Jam Buka</label>
                      <div class="col-lg-6">
                      <input class="form-control form-control-user" placeholder="Masukkan Jam Buka" type="varchar" name="jam_buka" required="">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-9">Latitude</label>
                      <div class="col-lg-6">
                          <input class="form-control form-control-user" placeholder="Masukkan Latitude" type="text" name="latitude" id="latitude">
                      </div>
                  </div>
                  <div class="form-group">
                      <label class="col-lg-9">Longitude</label>
                      <div class="col-lg-6">
                          <input class="form-control form-control-user" placeholder="Masukkan Longitude" type="text" name="longitude" id="longitude">
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
   <!-- Leaflet and custom script -->
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
   <script>
    // Memeriksa apakah Geolocation didukung oleh browser
    if ("geolocation" in navigator) {
        // Mendapatkan posisi geografis
        navigator.geolocation.getCurrentPosition(function(position) {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            // Mengisi nilai latitude dan longitude pada input
            document.getElementById("latitude").value = latitude.toFixed(6);
            document.getElementById("longitude").value = longitude.toFixed(6);
        });
    } else {
        alert("Geolocation is not available in this browser.");
    }
</script>

 
  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>
</body>

</html>
