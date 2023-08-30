<?php 
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas Akhir</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>

   <div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item active"><a href="destination.php" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="mappings.php" class="nav-link">Maps</a></li>
					<li class="nav-item"><a href="dashboard-t/aplikasi/admin/login.php" class="nav-link">Dashboard</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/tour-dest-header.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
         <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Tour List <i class="fa fa-chevron-right"></i></span></p>
         <h1 class="mb-0 bread">Tours List</h1>
     </div>
 </div>
</div>
</section>

<section class="ftco-section">
	<div class="container">
	    <div class="row justify-content-center pb-4">
		    <div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Rekreasi atau Hiburan</h2>
			</div>
        </div>
    <div class="row">
         <?php 
            include "koneksi.php";
            $query =  mysqli_query($koneksi, "SELECT * FROM tb_lokasi WHERE kategori='Rekreasi atau Hiburan'"); 
            $result = array(); 
            while ($data = mysqli_fetch_array($query)) {
            $result[] = $data; //result dijadikan array 
            }   
            foreach ($result as $value) { //jumlah array yang diulang
        ?>
	<div class="col-md-4 ftco-animate">
		<div class="project-wrap">
	    	<a href="#" class="img" style="background-image: url(images/location_list/<?php echo $value['gambar']?>);"></a>
				<div class="text p-4">
					<h3><a href="<?php echo $value['redirect_link']?>" target="_blank"><?php echo $value['nama']?></a></h3>
					<p class="location"><span class="fa fa-map-marker"></span> <?php echo $value['lokasi']?></p>
					<ul>
					    <li><span class="fa fa-money"></span>Start From Rp <?php echo $value['kisaran_harga']?></li>
					</ul>
				</div>
			</div>
		</div>
        <?php } ?>
    </div>  
	</div>   
	</section>

<footer class="" style="background-color: #E0E0E0;">
	<div class="row">
		<div class="col-md-12 text-center" style="color:black">
			<p>Copyright &copy; annisaaf</a></p>
		</div>
	</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>