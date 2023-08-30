<?php 
include "../../koneksi/koneksi.php";
$id_konten=$_POST['id_konten'];
$id=$_POST['id'];
$deskripsi=$_POST['deskripsi'];

// Get the uploaded files
$lokasi_file_1 = $_FILES['file_gambar_1']['tmp_name'];
$tipe_gambar_1 = $_FILES['file_gambar_1']['type'];
$nama_gambar_1 = $_FILES['file_gambar_1']['name'];

$lokasi_file_2 = $_FILES['file_gambar_2']['tmp_name'];
$tipe_gambar_2 = $_FILES['file_gambar_2']['type'];
$nama_gambar_2 = $_FILES['file_gambar_2']['name'];

$lokasi_file_3 = $_FILES['file_gambar_3']['tmp_name'];
$tipe_gambar_3 = $_FILES['file_gambar_3']['type'];
$nama_gambar_3 = $_FILES['file_gambar_3']['name'];

$lokasi_file_4 = $_FILES['file_gambar_4']['tmp_name'];
$tipe_gambar_4 = $_FILES['file_gambar_4']['type'];
$nama_gambar_4 = $_FILES['file_gambar_4']['name'];

// Move uploaded files to a directory
$direktori_1 = "/xampp/htdocs/tugas_akhir/konten/images/$nama_gambar_1";
$direktori_2 = "/xampp/htdocs/tugas_akhir/konten/images/$nama_gambar_2";
$direktori_3 = "/xampp/htdocs/tugas_akhir/konten/images/$nama_gambar_3";
$direktori_4 = "/xampp/htdocs/tugas_akhir/konten/images/$nama_gambar_4";

move_uploaded_file($lokasi_file_1, $direktori_1);
move_uploaded_file($lokasi_file_2, $direktori_2);
move_uploaded_file($lokasi_file_3, $direktori_3);
move_uploaded_file($lokasi_file_4, $direktori_4);

$query = mysqli_query($koneksi,"INSERT INTO tb_konten(id_konten, id, deskripsi, gambar_1, gambar_2, gambar_3, gambar_4) 
VALUES ('$id_konten', '$id', '$deskripsi', '$nama_gambar_1', '$nama_gambar_2', '$nama_gambar_3', '$nama_gambar_4')") or die(mysqli_error($koneksi));

		if(($query)==1){ 
			?>
			<script language="JavaScript">
	        	alert('Data berhasil Ditambahkan');
	        	document.location='dashboard-konten.php';
	      	</script>
		<?php
		}else{
		?>
		<script language="JavaScript">
        	alert('Terjadi Kesalahan Input!');
        	document.location='form-tambah-data-deskripsi.php?id=<?php echo $id_konten; ?>';
      	</script>
		<?php
		}
		?>