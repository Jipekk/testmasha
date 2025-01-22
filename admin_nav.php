<?php  
include 'config.php';

$username = isset($_GET['username']) ? $_GET['username'] : '';
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back_ios" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back_ios" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"> <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <link rel="stylesheet" href="">
	 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=account_circle" />
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend:wght@100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
		body {
			margin: 0px;
			font-family: "Poppins";
		}

		header {
			height: 50px;
			border-bottom: 1px solid #E9EAEC;
			position: relative;
		}

		i {
			position: absolute;
			bottom: 194px;
		}

		span {
			position: absolute;
			left: 950px;
			bottom: 180px;
		}


		.icon-box {
			position: absolute;
			left: 250px;
			width: 200px;
			height: 200px;
			margin-top: 20px;
			z-index: -1;
		}

		h3 {
			margin: 0px;
			position: absolute;
			left: 40px;
			bottom: 180px;
			font-family: "Roboto";
			font-size: 22px;
		}

		header .main-box {
			display: flex;
			justify-content: center;
		} 

		.left-main-box {
    		background-color: #fff2e9;
		    width: 200px;
		    height: 100%;
		    position: fixed; /* Keeps the sidebar fixed to the left */
		    top: 0;
		    left: 0;
		    display: flex;
		    flex-direction: column;
		    align-items: center;
		    box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px; /* Center items horizontally */
		}

		.top-navbar {
			background: linear-gradient(to top, #ebedee 0%, white 100%);
			height: 40px;
			width: 350px;
			margin-left: 200px;
			display: flex;
			justify-content: space-around;
			align-items: center;
		}

		.navbar {
		    width: 100%;
		    display: flex;
		    flex-direction: column; /* Stack links vertically */
		    align-items: center;
		    padding: 0px;
		    margin-bottom: 180px;
		}

		nav {
		    background-color: #fff2e9;
		    width: 100%; /* Adjust width inside the sidebar */
		    text-align: center;
		    height: 70px;
		    display: flex;
		    justify-content: center;
		    align-items: center;

		}

		nav:hover {
			background-color: #5D697A;
			color: white;
			cursor: pointer;
		}

		nav a {
		    color: #000; /* Dark text for contrast */
		    text-decoration: none;
		    font-size: 17px;
		}



		a:hover {
			text-decoration: none;
			color: white;

		}

		h4 {
			margin: 0px;
		}

		p {
			margin: 0px;
		}

		.top-nav {
			color: black;
			text-decoration: none;
		}

		.top-nav:hover {
			text-decoration: none;

		}

		h5 {
			margin-bottom: 100px;
		}

		.box-top-nav {
			width: 400px;
			height: 40px;
			display: flex;
			justify-content: center;
			align-items: center;
			transition: 0.7s;
		}
		
		.box-top-nav:hover {
			background-color: #0096FF ;
			cursor: pointer;
			transition: 0.7s;
		}

		.logout-button {
			background-color: #091057;
			color: white;
			width: 120px;
			height: 40px;
			border: none;
			border-radius: 9px;
			margin-top: 60px;
			transition: 0.5s;

		}

		.logout-button:hover {
			opacity: 0.7;
			border: none;
			transition: 0.5s;
		}

		.logout-button:active {
			outline: none;
		}


		button:hover {
			border: none;
		}

		.logo {
			width: 170px;
			height: 160px;
		}
</style>
</head>
<body>
	<header>
		<div class="icon-box">
			<i class="fa-solid fa-user fa-lg"></i>
			<h3><?php echo $username; ?></h3>
			<span class="material-symbols-outlined">account_circle</span>
		</div>
		<form action="adminlogin.php" class="left-main-box">
			<img class="logo" src="e-Facility.png">
			<div class="navbar">
				<nav><a href="adminpage.php?username=<?php echo htmlspecialchars($username); ?>">Dashboard</a></nav>
				<nav><a href="adminprofile.php?username=<?php echo htmlspecialchars($username); ?>">Admin Profile</a></nav>
			</div>
			<div class="logout">
				<span class="material-symbols-outlined">
</span><button class="logout-button" href="adminlogin.php">Log Out</button>
			</div>
		</form>
	</header>
		<div class="top-navbar">
		    <div class="box-top-nav">
		        <a class="top-nav" href="adminpage.php?username=<?php echo $username; ?>">Booking Customer</a>
		    </div>
		    <div class="box-top-nav">
		        <a class="top-nav" href="admin_information.php?username=<?php echo $username; ?>">Information</a>
		    </div>
		</div>
</body>
</html>