` <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
  	body {
  		background-image: linear-gradient(to bottom, #3e88f4, #89a2f6, #b9bff9, #dfdefc, #ffffff);
  	}
  </style>
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card shadow" style="width: 400px;">
      <div class="card-body">
        <h3 class="card-title text-center mb-4">Admin Login</h3>
        <form action="" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username"  id="username" placeholder="Enter username">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
          </div>
          <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
            <a href="index.php" class="btn btn-outline-secondary mt-2">Back to Home page</a>
          </div>

          <?php 
          include 'config.php';

          if (isset($_POST['submit'])) {
          	$username = $_POST['username'];
          	$password = $_POST['password'];

          	$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
          	$result = mysqli_query($connect, $query);

          	$row = mysqli_fetch_assoc($result,);
          	$count = mysqli_num_rows($result);

          	if ($count==1) {
          		header("Location: adminpage.php?username=$username");
          	}
          	else {
          		echo "<script>
          				window.location.href = 'adminlogin.php';
          				alert('Login Failed')
          				</script>";
          	}
          }
  	?>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
