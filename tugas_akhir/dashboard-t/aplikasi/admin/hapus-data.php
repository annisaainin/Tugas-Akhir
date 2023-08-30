<?php
include "../../koneksi/koneksi.php";
$id = $_GET['id'];


$db = mysqli_query($koneksi, "DELETE FROM tb_lokasi WHERE id='$id'") or die(mysqli_error()); {
?>
	<script type="text/javascript">
		alert("Data Anda Berhasil Terhapus");
		window.location.href = "dashboard.php";
	</script>

<?php } ?>