<?php 
include "../../koneksi/koneksi.php";
$id=$_POST['id'];
$nama=$_POST['nama'];
$kategori=$_POST['kategori'];
$lokasi=$_POST['lokasi'];
$rate=$_POST['rate'];
$kisaran_harga=$_POST['kisaran_harga'];
$jam_buka=$_POST['jam_buka'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];

//gambar
$lokasi_file = $_FILES['file_gambar']['tmp_name'];
$tipe_gambar = $_FILES['file_gambar']['type'];
$nama_gambar = $_FILES['file_gambar']['name'];
$n = "$id.jpg";
$direktori = "/xampp/htdocs/tugas_akhir/images/location_list/$n";

move_uploaded_file($lokasi_file,$direktori);
$query = mysqli_query($koneksi,"INSERT INTO tb_lokasi(id, nama, gambar, kategori, lokasi, rate, kisaran_harga, jam_buka, latitude, longitude) VALUES('$id', '$nama', '$n', '$kategori', '$lokasi', '$rate', '$kisaran_harga', '$jam_buka', '$latitude', '$longitude')")or die(mysqli_error($koneksi));

		if(($query)==1){ 
			?>
			<script language="JavaScript">
	        	alert('Data berhasil Ditambahkan');
	        	document.location='dashboard.php';
	      	</script>
		<?php
		}else{
		?>
		<script language="JavaScript">
        	alert('Terjadi Kesalahan Input!');
        	document.location='form-tambah-data-wisata.php?id=<?php echo $id; ?>';
      	</script>
		<?php
		}
		?>