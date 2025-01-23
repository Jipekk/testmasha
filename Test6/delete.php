<?php  
	include 'config.php';

	$id = $_GET['id'];
	$query = mysqli_query($conn, "DELETE FROM alumni WHERE id='$id'");
	header("Location: index.php");

?>