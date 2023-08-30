<?php 
include "../../koneksi/koneksi.php"; 

$id_konten=$_POST['id_konten'];
//$id=$_POST['id'];
$deskripsi=$_POST['deskripsi'];
		
$query = mysqli_query($koneksi,"UPDATE tb_konten SET deskripsi='$deskripsi' where id_konten='$id_konten'");

		if($query==true){ 
			?>
			<script language="JavaScript">
        		alert('Data berhasil Diedit');
    	    	document.location='dashboard-konten.php';
	      	</script>

			<?php
		}else{
			?>
		<script language="JavaScript">
        	alert('Maaf, Terjadi Kesalahan!');
        	document.location='form-edit-konten.php?id_konten=<?php echo $id_konten; ?>';
      	</script> 
		<?php
		}
?>