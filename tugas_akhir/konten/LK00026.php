<?php 
include "../koneksi.php";
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

	<link rel="stylesheet" href="../css/animate.css">
	
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">

	
	<link rel="stylesheet" href="../css/flaticon.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/tugas_akhir/index.php" class="nav-link" style="color:black;">Home</a></li>
					<li class="nav-item active"><a href="/tugas_akhir/destination.php" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="/tugas_akhir/mappings.php" class="nav-link" style="color:black;">Maps</a></li>
					<li class="nav-item"><a href="/tugas_akhir/dashboard-t/aplikasi/admin/dashboard.php" class="nav-link" style="color:black;">Dashboard</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
    <?php
	include "../koneksi.php";
		$query =  mysqli_query($koneksi, 'SELECT * FROM tb_lokasi WHERE id="LK00026"'); 
		$data = []; 
		while ($d = mysqli_fetch_assoc($query)) {
		$data[] = $d; //result dijadikan array 
		
	?>
	
		<div class="overlay"></div>
		<div class="container"></div>
		<section class="ftco-section services-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
						<div class="w-100">
							<h2 class="mb-4"><?php echo $d['nama']?></h2> 
							<p>Berkekal konsep yang homie, tentunya menjadikan Homeland Cafe and Eatery terlalu sayang untuk dilewatkan. Pencahayaan yang menenangkan mata, sajian menu yang beragam mulai dari main course bernuansa western food hingga lokal, serta dessert cantik yang menggugah selera. Tidak heran jika tempat ini selalu ramai dikunjingi khususnya oleh kaum muda mudi.</p>
                            
                            <p>Alamat: <?php echo $d['lokasi']?></p2>
                            <p>Jam Operasional: <?php echo $d['jam_buka']?></p2>
                            <p>Kisaran Harga: Start from Rp <?php echo $d['kisaran_harga']?></p2>

                            <?php } ?>
							
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="services services-1" style="background-image: url(../konten/images/lk26_1.jpg); width:200px;height:300px;"></div>      
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="services services-1" style="background-image: url(../konten/images/lk26_2.jpg); width:200px;height:300px;"></div>      
							</div>
                            <div class="col-md-12 col-lg-6">
								<div class="services services-1" style="background-image: url(../konten/images/lk26_3.jpg); width:200px;height:300px;"></div>      
							</div>	
                            <div class="col-md-12 col-lg-6">
								<div class="services services-1" style="background-image: url(../konten/images/lk26_4.jpg); width:200px;height:300px;"></div>      
							</div>						
						</div>
					</div>
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


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-migrate-3.0.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
<script src="../js/jquery.waypoints.min.js"></script>
<script src="../js/jquery.stellar.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/jquery.magnific-popup.min.js"></script>
<script src="../js/jquery.animateNumber.min.js"></script>
<script src="../js/bootstrap-datepicker.js"></script>
<script src="../js/scrollax.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
<script src="../js/google-map.js"></script>
<script src="../js/main.js"></script>
			
			
		</body>
		</html>
