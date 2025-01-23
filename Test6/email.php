<?php  
include 'config.php';

$username = $_GET['username'];

$query = "SELECT email FROM admin WHERE username = '$username'";
$result = mysqli_query($connect, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
}

if (isset($_POST['update'])) {
    $new_email = $_POST['email'];

    $query = "UPDATE admin SET email = '$new_email' WHERE username = '$username'";

    if (mysqli_query($connect, $query)) {
        header("Location: adminprofile.php?username=$username");
        exit();
    } else {
        echo "Failed to update the email.";
    }
}

include 'admin_nav.php';
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .box {
            background-color: #eeeeee;
            width: 500px;
            height: 150px;
            margin-top: 40px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-left: 500px;
            padding-top: 20px;
        }

        td {
            padding: 20px;
        }

        .button-update {
            background-color: #091057;
            color: white;
            border: none;
            border-radius: 3px;
            font-size: 15px;
            padding: 7px 20px;
            transition: 0.5s;
        }

        .button-update:hover {
            opacity: 0.6;
            transition: 0.5s;
            cursor: pointer;
        }

        input[type=text] {
            width: 230px;
            height: 25px;
            background-color: #E9EAEC;
            border: 1px solid black;
            border-radius: 3px;
        }

        input[type=text]:hover {
            border: 1px solid blue;
            border-radius: 3px;
        }

        .box-input {
            display: flex;
            justify-content: center;
            align-items: center;

        }
    </style>
</head>
<body>
    <form action="email.php?username=<?php echo $username; ?>" method="post" class="box">
        <center>
            <h4>Change Email</h4>
        </center>
        <center>    
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
                <td><input type="submit" name="update" class="button-update" value="Update"></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>
