<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style> 
        body {
            background-image: linear-gradient(to right, #617fff, #f89d79);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .login-form {
            background-color: #ced4ee;
            padding: 20px 40px;
            border-radius: 10px;
            width: 100%;
            max-width: 500px;
        }

        .login-form img {
            margin: 0 auto 20px;
            display: block;
            width: 360px;
            height: 100px;
        }

        .login-form input[type="submit"] {
            width: 100%;
            background-color: #4a90e2;
            color: white;
            font-weight: bold;
            border: none;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .login-form input[type="submit"]:hover {
            background-color: #3b78d0;
        }

        .login-form a {
            color: #4a90e2;
            text-decoration: none;
        }

        .login-form a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="login-form text-center">
        <img src="logo.kv1.png" alt="Logo">

        <!-- Form Start -->
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="ic">NO KAD PENGENALAN GURU</label>
                <input type="text" class="form-control" name="ic" id="ic" required>
            </div>
            <div class="form-group">
                <label for="password">KATA LALUAN</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <input type="submit" name="login" id="login" value="LOG MASUK" class="btn btn-primary">
        </form>

        <p><a href="homepage.php">KEMBALI</a></p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
