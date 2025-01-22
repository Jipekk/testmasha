<?php  
include 'config.php';
include 'nav.php';
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			font-family: "Poppins";
		}

		.box {
			background-color: white;
			height: auto;
			padding: 30px;
			margin-top: 90px;
			border-radius: 10px;
			width: 50%;
			box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
		}

		input[type=text] {
			width: 540px;
			height: 26px;
			display: flex;
			justify-content: center;
			align-items: center;
			outline: none;
			border-radius: 4px;
			border: 1px solid black;
		}

		input[type=text]:focus {
			border-color: #007bff;
			box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
			outline: none;
		}

		h2 {
			margin-top: 0px;
		}

		input[type=submit] {
			margin-top: 20px;
			width: 95px;
			height: 35px;
			border-radius: 5px;
			border: none;
			background-color: #0D6EFD;
			color: white;
			font-family: "Poppins";
			transition: 0.5s;
		}

		input[type=submit]:hover {
			opacity: 0.7;
			transition: 0.5s;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<center>
		<div class="box">
			<h2>Verify the status of your booking.</h2>
			<!-- Form starts -->
			<form action="booking_status.php" method="GET">
				<table>
					<tr>
						<td>No IC:</td>
					</tr>
					<tr>
						<td><input type="text" name="ic" placeholder="Enter your IC number" required></td>
					</tr>
				</table>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
	</center>
</body>
</html>
