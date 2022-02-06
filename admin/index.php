<?php
session_start();

include '../config/database.php';
include '../library/controllers.php';

$perintah = new oop();

$table = "tbl_user";
$nama_form = "hal_admin.php?menu=home";

if(isset($_POST['@user'])){

}

if(isset($_POST['@pass'])){

}

if(isset($_POST['login'])){
	@$perintah->login($koneksi, $table, $username, $password, $nama_form);
}

if(isset($_POST['batal'])){
	echo "<script>document.location.href='../'</script>";
}
?>

<title>Login</title>
<form method="POST">
	<table align="center">
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="user"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="pass"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type="submit" name="login" value="LOGIN">
				<input type="submit" name="batal" value="BATAL">
			</td>
		</tr>
	</table>
</form>

