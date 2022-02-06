<?php 
@session_start();

include '../config/database.php';
@$tampil = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM qw_siswa WHERE nis = '$_SESSION[username]'"));

if(empty($_SESSION['username'])){
	echo "<script>alert('Anda Belum Melakukan Login');document.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SIM ABSENSI</title>
</head>
<body>
	<h1 align="center">Welcome <a href="?menu=lihat_data" title="<?php echo @$tampil['nama']; ?>"><?php echo @$tampil['nama']; ?></a>
	</h1>
	 <h1 align="center">Sistem Absensi Versi 1.0</h1>
</body>
</html>