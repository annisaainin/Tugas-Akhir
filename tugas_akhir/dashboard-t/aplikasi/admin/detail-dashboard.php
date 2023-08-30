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
  <link rel="shortcut icon" href="../../../../assets/img/favicon.ico" type="image/x-icon">


  <title>DASHBOARD</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/vendor/fontawesome/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/fonts-googleapis.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/frola/css/froala_editor.css">
  <link rel="stylesheet" href="../assets/frola/css/froala_style.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/code_view.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/draggable.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/colors.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/emoticons.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/image_manager.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/image.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/line_breaker.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/table.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/char_counter.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/video.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/fullscreen.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/file.css">
  
  <link rel="stylesheet" href="../assets/frola/css/plugins/quick_insert.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/help.css">
  <link rel="stylesheet" href="../assets/frola/css/third_party/spell_checker.css">
  <link rel="stylesheet" href="../assets/frola/css/plugins/special_characters.css">
  <link rel="stylesheet" href="../assets/frola/tambahan/codemirror.min.css">
<link rel="stylesheet" href="../assets/frola/css/plugins/froala-audio.css">
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Dashboard</h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Data Laporan</a> -->
          </div>

          <!-- Content Row -->
          <div class="row">

            
            <?php 
           include "../../koneksi/koneksi.php";
           $query =  mysqli_query($koneksi, 'SELECT kategori, count(*) as jml FROM tb_lokasi GROUP BY kategori'); 
           $result = array(); // Corrected the array initialization
           while ($data = mysqli_fetch_array($query)) {
               $result[] = $data; // Result is added to the array 
           }   
           foreach ($result as $value){ 
            ?>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                      <a href="#"><?php echo $value['kategori']?></a>
                      </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                          echo "{$value['jml']} Wisata ";
                        ?>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            </div>
                <?php } ?>
         
        
        
           
                      
       
          <!-- Footer -->
            </div>
      
          <!-- Content Row -->
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
  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>
  <!-- Flora Editor -->
  <script type="text/javascript" src="../assets/frola/tambahan/codemirror.min.js"></script>
  <script type="text/javascript" src="../assets/frola/tambahan/xml.min.js"></script>

  <script type="text/javascript" src="../assets/frola/js/froala_editor.min.js" ></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/align.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/char_counter.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/code_beautifier.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/code_view.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/colors.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/draggable.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/emoticons.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/entities.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/file.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/font_size.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/font_family.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/fullscreen.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/image.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/image_manager.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/line_breaker.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/inline_style.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/link.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/lists.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/paragraph_format.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/paragraph_style.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/quick_insert.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/quote.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/table.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/save.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/url.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/video.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/help.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/print.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/third_party/spell_checker.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/special_characters.min.js"></script>
  <script type="text/javascript" src="../assets/frola/js/plugins/word_paste.min.js"></script>

  <script type="text/javascript" src="../assets/frola/js/plugins/froala-audio.js"></script>

</body>

</html>
