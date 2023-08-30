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
			<!-- <a class="navbar-brand" href="index.html">Pacific<span>Travel Agency</span></a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
					<li class="nav-item"><a href="mappings.php" class="nav-link">Maps</a></li>
					<li class="nav-item"><a href="dashboard-t/aplikasi/admin/login.php" class="nav-link">Dashboard</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->
	
	<div class="hero-wrap js-fullheight" style="background-image: url('images/bg-2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading">Welcome to Probolinggo</span>
					<h1 class="mb-4">Discover Your Favorite Place</h1>
					<p class="caps">Travel to the any corner without going around in circles</p>
				</div>
			</div>
		</div>
	</div>
	
		<section class="ftco-section services-section">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
						<div class="w-100">
							<h2 class="mb-4">It's time to start your adventure</h2>
							<p>Located in the eastern part of Java Island, Probolinggo has two administrative divisions namely city and regency. Even though its area is not very large, 
							it does not mean that Probolinggo is a remote area or far from the reach of public infrastructure. 
							This area actually provides fairly easy access for visitors, especially when passing by land.</p>
							<p>Probolinggo has a variety of interesting tourist destinations full of culture and history, to culinary delights that captivate its devotees. 
							Not to mention coupled with a relatively cheap price range, making this area a shame not to be missed.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-1 d-block img" style="background-image: url(images/index/index1.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Activities</h3>
										<p>The calm water with beautiful view of Gili Ketapang</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-2 d-block img" style="background-image: url(images/index/index2.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Travel Guides</h3>
										<p>Help you to find your favorite places</p>
									</div>
								</div>    
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-3 d-block img" style="background-image: url(images/index/index3.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Places with Rate</h3>
										<p>Let you know some best places to go</p>
									</div>
								</div>      
							</div>
							<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
								<div class="services services-1 color-4 d-block img" style="background-image: url(images/index/index4.jpg);">
									<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-cutlery"></span></div>
									<div class="media-body">
										<h3 class="heading mb-3">Food Travel</h3>
										<p>Take a rest! Let's get some food and coffee</p>
									</div>
								</div>      
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section img ftco-select-destination" style="background-color: #FAFAFA;">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<!-- <span class="subheading">Pacific Provide Places</span> -->
						<h2 class="mb-4">Select Your Destination</h2>
					</div>
				</div>
			</div>
			<div class="container container-2">
				<div class="row">
					<div class="col-md-12">
						<div class="carousel-destination owl-carousel ftco-animate">
							<div class="item">
								<div class="project-destination">
									<a href="destination-rekreasi.php" class="img" style="background-image: url(images/loc-1-ranu.jpg);">
										<div class="text">
											<h3>Rekreasi</h3>
											<?php 
												include "koneksi.php";
												$query =  mysqli_query($koneksi, 'SELECT count(*) as jml FROM tb_lokasi WHERE kategori="Rekreasi atau Hiburan"'); 
												$result = array(); 
												while ($data = mysqli_fetch_array($query)) {
												$result[] = $data; //result dijadikan array 
												}   
												foreach ($result as $value) { 
											?>
											<span><?php echo $value['jml']?> Tours</span>
										</div>
										<?php } ?>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="project-destination">
									<a href="destination-cafe.php" class="img" style="background-image: url(images/food-1.jpg);">
										<div class="text">
											<h3>Caffe and Eatery</h3>
											<?php 
												include "koneksi.php";
												$query =  mysqli_query($koneksi, 'SELECT count(*) as jml FROM tb_lokasi WHERE kategori="Cafe atau Eatery"'); 
												$result = array(); 
												while ($data = mysqli_fetch_array($query)) {
												$result[] = $data; //result dijadikan array 
												}   
												foreach ($result as $value) { 
											?>
											<span><?php echo $value['jml']?> Tours</span>
										</div>
										<?php } ?>
									</a>
								</div>
							</div>							
							<div class="item">
								<div class="project-destination">
									<a href="destination-kulinerlokal.php" class="img" style="background-image: url(images/lk57_2.jpg);">
										<div class="text">
											<h3>Kuliner Lokal</h3>
											<?php 
												include "koneksi.php";
												$query =  mysqli_query($koneksi, 'SELECT count(*) as jml FROM tb_lokasi WHERE kategori="Kuliner Lokal"'); 
												$result = array(); 
												while ($data = mysqli_fetch_array($query)) {
												$result[] = $data; //result dijadikan array 
												}   
												foreach ($result as $value) { 
											?>
											<span><?php echo $value['jml']?> Tours</span>
										</div>
										<?php } ?>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="project-destination">
									<a href="destination-edukasi.php" class="img" style="background-image: url(images/edu.jpg);">
										<div class="text">
											<h3>Edukasi</h3>
											<?php 
												include "koneksi.php";
												$query =  mysqli_query($koneksi, 'SELECT count(*) as jml FROM tb_lokasi WHERE kategori="Edukasi"'); 
												$result = array(); 
												while ($data = mysqli_fetch_array($query)) {
												$result[] = $data; //result dijadikan array 
												}   
												foreach ($result as $value) { 
											?>
											<span><?php echo $value['jml']?> Tours</span>
										</div>
										<?php } ?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-4">
					<div class="col-md-12 heading-section text-center ftco-animate">
						<span class="subheading">Destination</span>
						<h2 class="mb-4">Tour Destination</h2>
					</div>
				</div>
				<div class="row">
                    <?php 
                        include "koneksi.php";
                        $query =  mysqli_query($koneksi, 'SELECT * FROM tb_lokasi'); 
                        $result = array(); 
                        while ($data = mysqli_fetch_array($query)) {
                        $result[] = $data; //result dijadikan array 
                        }   
                        foreach (array_slice($result, 0, 3) as $value) { 
							//jumlah array yang diulang
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
