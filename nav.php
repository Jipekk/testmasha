<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cabin:ital,wght@0,400..700;1,400..700&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend:wght@100..900&family=Manrope:wght@200..800&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Outfit:wght@100..900&family=Parkinsans:wght@300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
		body {
			margin: 0px;
			font-family: "Poppins";
			background-color: #E9EAEC;
		}

		.box-header {
			background-color: white;
			margin-top: 0px;
			height: 80px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			padding: 0px 30px 0px 30px;			
			border-bottom: 1px solid black;
			border-radius: 0px 0px 15px 15px;
		}

		a {
    		text-decoration: none;
    		position: relative;
    		color: black;

		}

		a:after {
    		content: "";
    		width: 100%;
		    border-bottom: 2px solid #333;
		    position: absolute;
		    bottom: 0;
		    left: 0;
		    opacity: 0;
		    transition: opacity 300ms ease;
		}

		a:hover:after {
		    opacity: 1;
		}

		.navbar {
			margin-top: 0px;
			height: 80px;
			right: 0px;
			width: 120px;
			text-align: center;
		}

		.navbar:hover {
			text-decoration: underline;
			color: white;
		}

		.logo {
			width: 170px;
			height: 160px;
			margin-top: 20px;
		}


		h3 {
			margin-top: 0px;
			margin-bottom: 0px;
		}

		hr {
			margin-bottom: 0px;
		}

		.button-5 {
			  align-items: center;
			  background-clip: padding-box;
			  background-color: #EC8305;
			  border: 1px solid transparent;
			  border-radius: 15px;
			  box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
			  box-sizing: border-box;
			  color: #fff;
			  cursor: pointer;
			  display: inline-flex;
			  font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
			  font-size: 16px;
			  font-weight: 600;
			  justify-content: center;
			  line-height: 1.25;
			  margin: 0;
			  min-height: 3rem;
			  padding: calc(.875rem - 1px) calc(1.5rem - 1px);
			  position: relative;
			  text-decoration: none;
			  transition: all 250ms;
			  user-select: none;
			  -webkit-user-select: none;
			  touch-action: manipulation;
			  vertical-align: baseline;
			  width: auto;
		}

		.button-5:hover,
		.button-5:focus {
		  background-color: #EC8305;
		  box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
		}

		.button-5:hover {
		  transform: translateY(-1px);
		}

		.button-5:active {
		  background-color: #c85000;
		  box-shadow: rgba(0, 0, 0, .06) 0 2px 4px;
		  transform: translateY(0);
		}
	</style>
</head>
<body>
	<form action="adminlogin.php" class="box-header">
			<img class="logo" src="e-Facility.png">
		<center>
		<table>
			<tr>
				<td class="navbar"><a href="index.php">Home</a></td>
				<td class="navbar"><a href="about.php">About Us</a></td>
				<td class="navbar"><a href="fill_ic.php">Booking Status</a></td>
			</tr>
		</table>
		</center>
		<button class="button-5">Admin</button>
	</form>
</body>
</html>