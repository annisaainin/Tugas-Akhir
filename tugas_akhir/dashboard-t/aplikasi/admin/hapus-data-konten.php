<?php
include "../../koneksi/koneksi.php";
$id_konten = $_GET['id_konten'];


$db = mysqli_query($koneksi, "DELETE FROM tb_konten WHERE id_konten='$id_konten'") or die(mysqli_error()); {
?>
	<script type="text/javascript">
		alert("Data Anda Berhasil Terhapus");
		window.location.href = "dashboard-konten.php";
	</script>

<?php } ?>