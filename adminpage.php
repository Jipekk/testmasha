<?php  
	include 'config.php';
	include 'admin_nav.php';

	$username = $_GET['username'];
?>


<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table {
			position: absolute;
			left: 230px;
			margin-top: 30px;
			width: 0px;
			top: 100px;
		}

		th {
			background-color: #0096FF;
			color: white;
			font-size: 18px;
			text-align: center;
			height: 50px;
			width: 220px;
		}

		td {
			text-align: center;
			font-size: 18px;
			height: 40px;
			width: 200px;
		}

	</style>
</head>
</html>
</head>
<html>
<body>
		<table class="table table-bordered table-striped table-hover mt-2 w-4" style=" width: 1000px;	 overflow-y: auto; display: block;">
    <thead class="thead-#0096FF">
        <tr>
        	<th>ID</th>
            <th>Full Name</th>
            <th>IC</th>
            <th>Booking Type</th>
            <th>Date</th>
            <th>Duration</th>
            <th>Details</th>
        </tr>
    </thead>
    <tbody>
        <?php  
            $query = "SELECT * FROM booking_status";
            $result = mysqli_query($connect, $query);
            
            while ($row = mysqli_fetch_assoc($result)) {
            	$id = $row['id'];
                $full_name = $row['full_name'];
                $ic = $row['ic'];
                $booking_type = $row['booking_type'];
                $date = $row['datee'];
                $duration = $row['duration'];
                $details = $row['details'];

                echo "<tr>
                <td>$id</td>
                <td>$full_name</td>
                <td>$ic</td>
                <td>$booking_type</td>
                <td>$date</td>
                <td>$duration</td>
                <td>$details</td>
                </tr>";
            }
        ?>
    </tbody>
</table>
		</table>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>