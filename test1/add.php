<?php  
	include 'config.php';

	if (isset($_POST['hantar'])) {
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$jantina = $_POST['jantina'];
		$no_tel = $_POST['no_tel'];
		$alamat = $_POST['alamat'];
		$tahun_grad = $_POST['tahun_grad'];
		$status = $_POST['status'];

		$result = mysqli_query($conn, "INSERT INTO alumni (id, nama, jantina, no_tel, alamat, tahun_grad, status) VALUES ('$id', '$nama', '$jantina', '$no_tel', '$alamat', '$tahun_grad', '$status');");
		header("Location: index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<form method="post">
			<h3>TAMBAH ALUMNI</h3>
		<table>
			<tr>
				<td>NO ID:</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>NAMA PELAJAR:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>JANTINA:</td>
				<td>
					<select name="jantina">
						<option>Lelaki</option>
						<option>Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>NO TEL:</td>
				<td><input type="text" name="no_tel"></td>
			</tr>
			<tr>
				<td>ALAMAT:</td>
				<td><textarea name="alamat" rows="3" cols="25"></textarea></td>
			</tr>
			<tr>
				<td>TAHUN GRADUATE:</td>
				<td><input type="text" name="tahun_grad"></td>
			</tr>
			<tr>
				<td>STATUS:</td>
				<td><input type="text" name="status"></td>
			</tr>
		</table>
		<input type="submit" name="hantar">
	</form>
	</center>
</body>
</html>