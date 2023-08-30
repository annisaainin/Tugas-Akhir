<?php 
include "../../koneksi/koneksi.php"; 

$id=$_POST['id'];
$nama=$_POST['nama'];
$gambar=$_POST['gambar'];
$kategori=$_POST['kategori'];
$lokasi=$_POST['lokasi'];
$rate=$_POST['rate'];
$kisaran_harga=$_POST['kisaran_harga'];
$jam_buka=$_POST['jam_buka'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$redirect_link=$_POST['redirect_link'];
		
$query = mysqli_query($koneksi,"UPDATE tb_lokasi SET nama='$nama', lokasi='$lokasi', rate='$rate',
kisaran_harga='$kisaran_harga', jam_buka='$jam_buka', latitude='$latitude', longitude='$longitude' where id='$id'");

		if($query==true){ 
			?>
			<script language="JavaScript">
        		alert('Data berhasil Diedit');
    	    	document.location='dashboard.php';
	      	</script>

			<?php
		}else{
			?>
		<script language="JavaScript">
        	alert('Maaf, Terjadi Kesalahan!');
        	document.location='form-edit-wisata.php?id=<?php echo $id; ?>';
      	</script> 
		<?php
		}
?>