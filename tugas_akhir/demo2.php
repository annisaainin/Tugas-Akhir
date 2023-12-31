<?php
include "koneksi.php";               
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<base target="_top">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Tugas Akhir</title>
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
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

	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
	<script src="https://raw.githubusercontent.com/makinacorpus/Leaflet.TextPath/master/leaflet.textpath.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- JavaScript code -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>

    <!-- control search -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
	<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
	<script src="/tugas_akhir/leaflet-search/leaflet-search-master/dist/leaflet-search.src.js"></script>
	<link rel="stylesheet" href="/tugas_akhir/leaflet-search/leaflet-search-master/src/leaflet-search.css" />
    
	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		.leaflet-container {
            margin-top: 3%;
            margin-bottom: 3%;
            margin-left: 5%;
            margin-right: 5%;
			height: 70%;
			width: 90%;
			max-width: 90%;
			max-height: 100%;
		}
	</style>
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
					<li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
					<li class="nav-item active"><a href="mappings.php" class="nav-link">Maps</a></li>
					<li class="nav-item"><a href="dashboard-t/aplikasi/admin/login.php" class="nav-link">Dashboard</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/mappings-header.jpg');">
	<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Destination List <i class="fa fa-chevron-right"></i></span></p>
					<h1 class="mb-0 bread">Find Destination</h1>
				</div>
			</div>
		</div>
	</section>
    
	<section class="ftco-section ftco-no-pb">
		<div class="container">

		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Find Your Destination</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="search-wrap-1 ftco-animate">
					<form action="#" class="search-property-1">
						<div class="row no-gutters">
							<div class="col-lg-12">
								<div class="form-group p-4 border-0">
									<label for="filter">Filter by</label>
									<div class="form-field">
										<div class="select-wrap">
											<div class="icon"><span class="fa fa-chevron-down"></span></div>
												<select name="" id="filter" class="form-control">
													<option value="all">All</option>
													<option value="Rekreasi atau Hiburan">Rekreasi atau Hiburan</option>
													<option value="Cafe atau Eatery">Cafe atau Eatery</option>
                                                    <option value="Edukasi">Edukasi</option>
													<option value="Religi">Religi</option>
													<option value="Kuliner Lokal">Kuliner Lokal</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							<div>
						</div>
					</form>
				</div>
			<div>
		</div>
	</section>


<!-- <script src="sample-geojson.js" type="text/javascript"></script> -->
<?php
include "koneksi.php";
$query =  mysqli_query($koneksi, "SELECT CONCAT('[', latitude, ',', longitude, ']') AS loc, CONCAT(kategori, ': ', nama) AS title, nama, gambar, kategori, jam_buka, rate, kisaran_harga, latitude, longitude, redirect_link FROM `tb_lokasi`;"); 
$data = []; 
while ($d = mysqli_fetch_assoc($query)) {
	$data[] = $d; //result dijadikan array 
}
?>
<div id='map'></div>

<!-- <script src="sample-geojson.js" type="text/javascript"></script> -->
<script>
var map = L.map('map').fitWorld();
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '© OpenStreetMap'
}).addTo(map);


map.locate({ setView: true, maxZoom: 15 });

let data = <?php echo json_encode($data); ?>;
var redIcon = L.icon({
  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]
});

var markerLayer = new L.LayerGroup(); // Layer yang berisi marker
map.addLayer(markerLayer);
var rad = 3000;

// Fungsi yang akan dipanggil ketika lokasi perangkat berhasil ditemukan
function onLocationFound(e) {
  var latitude = e.latlng.lat;
  var longitude = e.latlng.lng;

  console.log('Latitude: ' + latitude);
  console.log('Longitude: ' + longitude);

  var marker1 = L.marker(e.latlng, { icon: redIcon }).addTo(map);
  L.circle(e.latlng, rad).addTo(map);

  // Panggil fungsi filterMarkers dengan nilai awal setelah lokasi perangkat ditemukan
  filterMarkers('all', e.latlng);
}

// Fungsi untuk memfilter marker berdasarkan selectedValue
function filterMarkers(selectedValue, currentLocation) {
  markerLayer.clearLayers(); // Menghapus marker yang ada

  data.forEach(function(d) {
    var title = d.title; // Nilai yang dicari
    var loc = d.loc; // Posisi yang ditemukan

    let jarak = currentLocation.distanceTo(L.latLng(d.latitude, d.longitude));
    if (jarak < rad) {
      // Check if the marker should be visible based on the selected value
      if (selectedValue === 'all' || d.kategori === selectedValue) {
        var marker = L.marker([d.latitude, d.longitude], { title: title });
        marker.bindPopup(
			d.nama +
			'<br>' + d.kategori +
			'<br>' + d.jam_buka +
			//'<br>' + d.rate +
			'<br>' + jarak.toFixed(0) + ' m' +
			'<br> <a href="' + d.redirect_link + '" target="_blank">Details</a>'
        	);
			markerLayer.addLayer(marker);
      }
      console.log(jarak);
    }
  });
}

// Panggil fungsi onLocationFound ketika lokasi perangkat berhasil ditemukan
map.on('locationfound', onLocationFound);

var controlSearch = new L.Control.Search({
  position: 'topleft',
  layer: markerLayer,
  initial: false,
  zoom: 17,
  marker: false,
});
map.addControl(controlSearch);

// Panggil fungsi filterMarkers dengan nilai awal
filterMarkers('all', map.getCenter());

// Event listener untuk perubahan pada dropdown
document.getElementById('filter').addEventListener('change', function() {
  var selectedValue = this.value;
  filterMarkers(selectedValue, map.getCenter());
});

console.log(data);
</script>
</script>



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
<script src="js/main.js"></script>

</body>

</html>