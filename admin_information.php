<?php  
	include 'config.php';
	include 'admin_nav.php';
	
	$username = $_GET['username'];
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.information-box {
			background-color: #f8f9fa;
			box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
			height: 400px;
			margin-top: 30px;
			width: 500px;
			margin-left: 200px;
			border-radius: 10px;
			padding-top: 40px;
		}

		.input-info {
			width: 400px;
			height: 100px;
			margin-top: 20px;
			border: 2px solid #ccc; /* Default gray border */
    		border-radius: 8px; /* Rounded corners */
    		outline: none;
		}

		.input-info:focus {
			border-color: #80bdff; /* Light blue border color on focus */
    		box-shadow: 0 0 5px rgba(128, 189, 255, 0.5); /* Subtle blue glow */
		}

		input[type=date] {
			width: 400px;
			height: 35px;
			margin-top: 20px;
			border: 2px solid #ccc; /* Default gray border */
    		border-radius: 8px; /* Rounded corners */
    		outline: none;

		}

		input[type=date]:focus {
			border-color: #80bdff; /* Light blue border color on focus */
    		box-shadow: 0 0 5px rgba(128, 189, 255, 0.5); /* Subtle blue glow */
		}
		
		input[type=submit] {
			margin-top: 10px;
			border-radius: 5px;
			border: none;
			width: 120px;
			height: 40px;
			background-color: #0096FF;
			color: white;
			transition: 0.7s;
		}

		input[type=submit]:hover {
			opacity: 0.8;
			transition: 0.7s;
		}

		select {
			width: 400px;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<center>
			<form class="information-box" method="POST" action="admin_information.php?username=<?php echo htmlspecialchars($username); ?>">
		    	<h2>Information</h2>
		    	<select name="booking_type">
		    		<option>Select Booking Type</option>
		    		<option>Football Filed</option>
		    		<option>Dewan</option>
		    		<option>Rugby Field</option>
		    		<option>Futsal</option>
		    		<option>Tennis Court</option>
		    		<option>Bilik AV</option>
		    	</select>
		    <textarea class="input-info" name="information" placeholder="Enter Information"></textarea>
		    <input type="date" name="tarikh">
		    <br>
		    <?php  
if (isset($_POST['hantar'])) {
    $booking_type = $_POST['booking_type'];
    $information = $_POST['information'];
    $tarikh = $_POST['tarikh'];

    $result = mysqli_query($connect, "INSERT INTO announcement (booking_type , information , tarikh) VALUES ('$booking_type' , '$information', '$tarikh');");

}
?>
		    <input type="hidden" name="username" value="<?php echo htmlspecialchars($username); ?>">
		    <br>
		    <input type="submit" name="hantar">
</form>

	</center>
</body>

</html>