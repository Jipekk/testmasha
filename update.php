<?php  
	include 'config.php';

	$username = $_GET['username'];

	$query = "SELECT * FROM admin";
	$result = mysqli_query($connect, $query);

	while ($row = mysqli_fetch_assoc($result)) {
		$fname = $row['fname'];
		$email = $row['email'];
		$phone = $row['phone'];
		$dob = $row['dob'];
		$address = $row['address'];
	}

	if (isset($_POST['update'])) {
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$dob = $_POST['dob'];
		$address = $_POST['address'];

		$query = "UPDATE admin SET 
		fname = '$fname',
		email = '$email',
		phone = '$phone',
		dob = '$dob',
		address = '$address'
		WHERE username = '$username'";


		if ($result= mysqli_query ($connect, $query)) {

		echo "berjaya";
		header("Location: adminprofile.php?username=$username");
		exit();


	} else {
	  echo "tidak berjaya";
	};
	}

	include 'admin_nav.php';
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.box {
			background-color: #f8f9fa;
			width: 400px;
			height: 380px;
			margin-top: 40px;
			box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
		}

		td {
			padding: 20px;
		}

		.button-update {
			background-color: #0096FF;
			border: none;
			border-radius: 3px;
			font-size: 15px;
			padding: 7px 20px;
			transition: 0.5s;
		}

		.button-update:hover {
			opacity: 0.6;
			transition: 0.5s;
			cursor: pointer;
		}

		input[type=text] {
			width: 230px;
			height: 25px;
			background-color: #E9EAEC;
			border: 1px solid black;
			border-radius: 3px;
		}

		input[type=text]:hover {
			border: 1px solid blue;\
			border: none;
			border-radius: 3px;
		}

		input[type=date] {
			width: 230px;
			height: 25px;
			background-color: #E9EAEC;
			border: 1px solid black;
			border-radius: 3px;
		}

		input[type=date]:hover {
			border: 1px solid blue;\
			border: none;
			border-radius: 3px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<center>
		<form action="update.php?username=<?php echo $username; ?>" method="post" class="box">
			<table>
				<tr>
					<td>Full Name:</td>
					<td><input type="text" name="fname"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email"></td>
				</tr>
				<tr>
					<td>Phone:</td>
					<td><input type="text" inputmode="numeric" name="phone"></td>
				</tr>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="dob"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><input type="text" name="address"></td>
				</tr>
			</table>
			<input type="submit" name="update" class="button-update" value="Update"></input>
		</form>
	</center>
</body>
</html>
<?php  

?>