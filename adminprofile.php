<?php 	
include 'config.php';
include 'admin_nav.php';

	$username = $_GET['username'];

	$username = mysqli_real_escape_string($connect, $_GET['username']);
    $img_query = "SELECT img FROM admin WHERE username = '$username'";
    $result = mysqli_query($connect, $img_query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image_data = base64_encode($row['img']);
    } 
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.container {
			background-color: #eeeeee;			
			width: 500px;
			height: 450px;
			margin-left: 450px;
			margin-top: 20px;
			padding-top: 30px;
			box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
			border-radius: 10px;
			box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
		}

		.profile {
			width: 120px;
			border-radius: 60%;

		}

		p {
			margin-top: 10px;
		}

		table {
			display: flex;
			justify-content: center;
			align-items: center;
		}

		td {
			padding: 7px;
		}



	</style>
</head>
<body>
	<div class="container">
			<center>
				<img class="profile" src="data:image/jpeg;base64,<?php echo $image_data ?? base64_encode(file_get_contents('fallback.jpg')); ?>">
			<h4><?php echo $username; ?></h4>
			</center>
		<table>
		<?php
			$query = "SELECT * FROM admin WHERE username = '$username'";
			$result = mysqli_query($connect, $query);

			if ($row = mysqli_fetch_assoc($result)) { // Fetch only one row
			    echo "
			    <tr>
			        <td><p>Full Name:</p></td>
			        <td><p>".$row['fname']."</p></td>
			        <td><a href='fname.php?username=$username'>Update</a></td>
			    </tr>
			    <tr>
			        <td><p>Email:</p></td>
			        <td><p>".$row['email']."</p></td>
			        <td><a href='email.php?username=$username'>Update</td></td>

			    </tr>
			    <tr>
			        <td><p>Phone:</p></td>
			        <td><p>".$row['phone']."</p></td>
			        <td><a href='phone.php?username=$username'>Update</a></td>
			    </tr>
			    <tr>
			        <td><p>DOB:</p></td>
			        <td><p>".$row['dob']."</p></td>
			        <td><a href='dob.php?username=$username'>Update</a></td>
			    </tr>
			    <tr>
			        <td><p>Address:</p></td>
			        <td><p>".$row['address']."</p></td>
			        <td><a href='address.php?username=$username'>Update</a></td>
			    </tr>";
			}
		?>

		</table>
	</div>
</body>
</html>