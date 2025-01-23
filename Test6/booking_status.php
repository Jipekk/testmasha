<?php  
include 'nav.php';
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend:wght@100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
		body {
			font-family: "Roboto";

		}

		td {
			width: 150px;
			text-align: center;
			height: 50px;		}

		.table-status {
			margin-top: 40px;
			border-collapse: collapse;
			border: unset;

		}

		.table-status td {
			padding-top: 5px;
			border-style: groove;

		}

		th {
			background-color: #091057;
			color: white;
			height: 50px;
		}

		button[type=submit] {
			background-color: #fc0000; 
			color: white; 
			border: none; 
			font-family: Poppins ; 
			padding: 5px 10px; 
			border-radius: 5px; 
			cursor: pointer;
			transition: 0.6s;
		}

		button[type=submit]:hover {
			opacity: 0.7;
			transition: 0.6s;
		}

	</style>
</head>
<body>
	<center>
		<form class="box-container" action="delete.php?id=$id&ic=$ic">
			<?php
			if (isset($_GET['ic']) && !empty($_GET['ic'])) {
				$ic = mysqli_real_escape_string($connect, $_GET['ic']);
				
				$result = mysqli_query($connect, "SELECT * FROM booking_status WHERE ic = '$ic'");
				
				if (mysqli_num_rows($result) > 0) {
					echo "
					<table class='table-status'>
						<tr>
							<th>Full Name</th>
							<th>IC</th>
							<th>Duration</th>
							<th>Date</th>
							<th>Booking Type</th>
							<th>Details</th>
							<th>Action</th>
						</tr>";
					
					while ($row = mysqli_fetch_assoc($result)) {
					    $id = $row['id'];
					    $nama = $row['full_name'];
					    $duration = $row['duration'];
					    $date = $row['datee'];
					    $booking_type = $row['booking_type'];
					    $details = $row['details'];

					    echo "
					    <tr>
					        <td>$nama</td>
					        <td>$ic</td>
					        <td>$duration</td>
					        <td>$date</td>
					        <td>$booking_type</td>
					        <td>$details</td>
					        <td>
					            <form action='delete.php' method='GET' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
					                <input type='hidden' name='id' value='$id'>
					                <input type='hidden' name='ic' value='$ic'>
					                <button type='submit'>
					                    Cancel Booking
					                </button>
					            </form>
					        </td>
					    </tr>";
					}

					echo "</table>";
				}
			}
			?>
		</form>
	</center>
</body>
</html>
