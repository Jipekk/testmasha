<?php
session_start();

$ic = $_POST['no_kad_pengenalan'];
$password = $_POST['password'];

if ($ic && $password) {
    $server = 'localhost';
    $userid = 'root';
    $dbpassword = '';
    $dbname = 'pendaftaran';
    $connect = mysqli_connect($server, $userid, $dbpassword, $dbname);

    if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM pensyarah WHERE no_kad_pengenalan = '$ic'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) != 0) {

        while ($row = mysqli_fetch_assoc($result)) {
            $dbid = $row['no_kad_pengenalan'];
            $dbpassword = $row['password'];
        }


        if ($ic == $dbid && $password == $dbpassword) {
   
            $_SESSION['no_kad_pengenalan'] = $ic;
            header('Location: http://localhost/pendaftaran/index.php');
            exit();
        } else {

            echo "No Kad Pengenalan Guru atau Kata Laluan yang salah. <a href='login.php'>Tekan sini untuk log masuk semula</a>";
        }
    } else {

        echo "Pengguna tersebut tidak wujud. <a href='login.php'>Tekan sini untuk log masuk semula</a>";
    }
} else {

    echo "Sila masukkan No Kad Pengenalan dan Kata Laluan. <a href='login.php'>Tekan sini untuk log masuk semula</a>";
}

?>
