<?php 
include 'nav.php';

?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
		}

		.box-container {			
			background-color: #E9EAEC;
			height: 100%;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
			padding-left: 30px;
			padding-top: 40px;
			margin-bottom: 60px;

		}

		.football-field,
		.dewan,
		.rugby-field,
		.bilik-av,
		.futsal,
		.tennis-court {
			background-color: white;
			height: 280px;
			margin-right: 30px;
			border-radius: 10px;
			border: none;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			margin-bottom: 60px;


		}

		.book-button {
			background-color: #F2F4FF;
			width: 70px;
			height: 30px;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 4px;
			border: 1px solid #0066FF;
			margin-top: 5px;
			overflow: hidden;
			cursor: pointer;
			object-fit: cover;
			transition: 1s ease;
		}

		.book-button:hover {
			background-color: #0066FF;
			transition: 0.5s;
		}

		img {
			border-radius: 10px 10px 0px 0px;
			

		}

		img:hover {
			
		}

		.book-text {
			color: #0066FF; 
			font-family: "Poppins";
		}

		.book-text:hover {
			color: white;
			transition: 0.5s;
		}

		.book-text:after {
			border-bottom: none;
		}
	</style>
</head>
<body>
	<div style="padding-top: 30px; "
>		<h1 style="text-align: center; font-family: Roboto; margin: 0px;">FACILITY IN KV SEPANG</h1>
	</div>
	<form action="form_page.php" class="box-container">
	<div class="football-field">
		<img src="football_field.jpg" width="100%" height="75%">
		<center>
			<h4 style="margin: 0px; font-family: Roboto">Football field</h4>
			<div class="book-button">
			<a class="book-text" href="form_page.php?booking_type=<?php echo urlencode('Kolej Vokasional Sepang Football Field'); ?>">Book</a>

		</div>
		</center>
	</div>	
	<div class="dewan">
		<img src="dewankv.jpg" width="100%" height="75%">
		<center>
			<h4 style="margin: 0px; font-family: Roboto">Dewan</h4>
			<div class="book-button">
			<a class="book-text" href="form_page.php?booking_type=<?php echo urlencode('Dewan AL-Jazari'); ?>">Book</a>

		</div>
		</center>
		
	</div>
	<div class="rugby-field">
		<img src="rugby_field.jpg" width="100%" height="75%">
		<center>
			<h4 style="margin: 0px; font-family: Roboto">Rugby field</h4>
			<div class="book-button">
			<a class="book-text" href="form_page.php?booking_type=<?php echo urlencode('Kolej Vokasional Sepang Rugby Field'); ?>">Book</a>

		</div>
		</center>
		
	</div>
	<div class="bilik-av">
		<img src="bilikav.jpg" width="100%" height="75%">
		<center>
			<h4 style="margin: 0px; font-family: Roboto">Bilik Av</h4>
			<div class="book-button">
			<a class="book-text" href="form_page.php?booking_type=<?php echo urlencode('Bilik Audio Video'); ?>">Book</a>

		</div>
		</center>
		
	</div>
	<div class="futsal">
		<img src="futsal_court.jpg" width="100%" height="75%">
		<center>
			<h4 style="margin: 0px; font-family: Roboto">Futsal</h4>
			<div class="book-button">
			<a class="book-text" href="form_page.php?booking_type=<?php echo urlencode('Kolej Vokasional Sepang Futsal'); ?>">Book</a>

		</div>
		</center>
		
	</div>
	<div class="tennis-court">
		<img src="tennis_court.jpg" width="100%" height="75%">
		<center>
			<h4 style="margin: 0px; font-family: Roboto">Tennis Court</h4>
			<div class="book-button">
			<a class="book-text" href="form_page.php?booking_type=<?php echo urlencode('Kolej Vokasional Sepang Tennis Court'); ?>">Book</a>

		</div>
		</center>

	</div>
	</form>
	<?php  
	include 'footer.php';


	?>
</body>
</html>