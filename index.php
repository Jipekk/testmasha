<?php 
include 'config.php';
include 'nav.php';
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
		}

		.banner {
			margin-top: 10px;
			width: 100%;
			background-color: rgba(255,255,255,0);
			height: 600px;
			background: rgba(0, 0, 0, 0.4);
			font-family: "Poppins";
			display: flex;
			justify-content: space-around;
		}

		

		.text-information {
			width: 500px;
			height: 500px;
		}

		.box-explore {
			height: 700px;
			margin-top: 30px;
		}

		.box {
			height: 530px;
			width: 1000px;
			margin: 0 auto;

		}

		

		.explore-text {
			color: #091057;
			font-size: 24px;
			margin-left: 7px;
			font-family: "Poppins";

			
		}

		.explore-text:after {
			border-bottom: 0px;

		}

		.explore {
			height: 500px;
			width: 1000px;
			display: grid;
			grid-template-columns: 1fr 1fr 1fr;
		}

		.img-explore {
			width: 95%;
			height: 93%;
			transition: 0.7s;
		}

		.img-explore:hover {
			transform: scale(1.1);
			transition: 0.7s;
		}
		
		.information {
			height: 350px;
			margin-top: 40px;
			padding-left: 30px;
			background-color: white;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
			color: white;
			border-radius: 10px;

		} 

		.text-announcement {
			font-size: 40px;
			color: #091057;

		}

		.th {
			background-color: #EC8305;
			color: white;
			border-color: #EC8305;
		}

		tr:hover {
			color: #024CAA;
		}



		h1 {
			padding-top: 220px;
			margin: 0px;
			text-align: center;
			color: white;
			font-size: 35px;
			font-family: "Roboto";
		}

		td {
			color: black;
		}

		td:hover {
			color: blue;
			cursor: pointer;
		}

		button:hover { 
			opacity: 0.8;
			transition: 0.7s;
			cursor: pointer;
			transform: scale(1.1);
		}

		.announcement {
			width: 1200px;
			text-align: center;
			border: 1px solid black;
			border-collapse: collapse;

		}

		.p {
			color: #091057;
		}

	</style>
</head>
<body>
	<form action="facility_page.php" class="banner">
		<img src="banner.jpg" width="100%" height="600px;" style="z-index: -1;
			position: absolute;
			background-color: rgba(255,255,255,0);">
		<div class="text-information">
			<h1>Welcome to the Kolej Vokasional Sepang e-Facility</h1><br>
			<h2 style="color: white; margin-bottom: 40px; text-align: center;">Choose any Facility you want!</h2>
		</div>
	</form>
		<div class="information">
			<div>
				<h2 class="text-announcement">Announcement</h2>
				<p class="p">The following dates are unavailable for booking due to specific conditions below.</p>
				<center>
				<table class="announcement" border="1">
					<th class="th">Facility</th>
					<th class="th">Information</th>
					<th class="th">Date</th>
				<?php  
					$query = "SELECT * FROM announcement";
					$result = mysqli_query($connect, $query);
					
					while ($row = mysqli_fetch_assoc($result)) {
						
						echo "<tr>
							<td>".$row['booking_type']."</td>
							<td>".$row['information']."</td>
							<td>".$row['tarikh']."</td>
						</tr>";
					}				

				?>

				</table>
				</center>
			</div>
		</div>

		<div class="box-explore">
						<div class="box">
				<a class="explore-text">Explore More</a> 
				<center>
					<div class="explore">
					<div>
						<a class="explore-text" href="facility_page.php"><img style="border-radius: 20px 0px 0px 0px;" class="img-explore" src="football.jpg"></a>
					</div>
					<div>
						<a class="explore-text" href="facility_page.php"><img class="img-explore" src="rugby.jpg"></a>
					</div>
					<div>
						<a class="explore-text" href="facility_page.php"><img style="border-radius: 0px 20px 0px 0px;" class="img-explore" src="futsal.jpg"></a>
					</div>
					<div>
						<a class="explore-text" href="facility_page.php"><img style="border-radius: 0px 0px 0px 20px;" class="img-explore" src="dewan.jpg"></a>
					</div>
					<div>
						<a class="explore-text" href="facility_page.php"><img class="img-explore" src="tennis.jpg"></a>
					</div>
					<div>
						<a class="explore-text" href="facility_page.php"><img style="border-radius: 0px 0px 20px 0px;" class="img-explore" src="bilik_av.jpg"></a>
					</div>
				</div>
				</center>
				</div>
				</div>
	
	<?php
	include 'footer.php'; 
	?>
</body>
</html>