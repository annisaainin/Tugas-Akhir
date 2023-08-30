<?php
$username_user = $_POST['username_user'];
$password_user = ($_POST['password_user']);

include '../../koneksi/koneksi.php';

$sql = mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username_user='$username_user' AND password_user='$password_user'");
$qry = (mysqli_num_rows($sql));

if($qry>0)
{
	session_start();
	$row = mysqli_fetch_array($sql);
	$_SESSION['username_user'] = $row['username_user'];
	header("location:dashboard.php");

}else{ ?>

	<script language="JavaScript">
		alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
		document.location='login.php';
	</script>

<?php } 
?>















