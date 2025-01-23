<?php  
    include 'nav.php';
    include 'config.php';
    $nama = $_POST['full_name'];
    $ic = $_POST['ic'];
    $booking_type = $_POST['booking_type'];
    $date = $_POST['datee'];
    $duration = $_POST['duration'];
    $price = $_POST['price'];
    $details = $_POST['details'];

    $query = mysqli_query($connect, "INSERT INTO booking_status (full_name, ic, booking_type, datee, duration, price, details) VALUES 
        ('$nama', '$ic', '$booking_type', '$date', '$duration', '$price', '$details');");

    $image_data = $_POST['image_data'];
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        body {
            font-family: "Roboto";
        }
        .box-receipt {
            background-color: white;
            width: 550px;
            height: 600px;
            margin-top: 30px;
            border-radius: 5px;
            padding-top: 15px;
            margin-bottom: 30px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        td {
            padding: 10px;
        }
        img {
            border-radius: 20px;
        }
        h2 {
            font-family: "Poppins";
        }

        .print {
            background-color: #091057;
            border: 0px solid;
            border-radius: 10px;
            padding: 10px;
            color: white;
            margin: 10px;
            transition: 0.7s;
        }

        .print:hover {
            background-color: white;
            color: #091057;
            border: 2px solid #091057;
            cursor: pointer;
            transition: 0.7s;
        }
    </style>
</head>
<body>
    <center>
        <div class="box-receipt" id="printArea">
            <h2>Facility Successfully Booked!</h2>
           <img src="data:image/jpeg;base64,<?php echo $image_data; ?>" width="70%" height="35%">

            <table>
                <tr>
                    <td>Booking Name:</td>
                    <td><?php echo $booking_type; ?></td>
                </tr>
                <tr>
                    <td>Full Name:</td>
                    <td><?php echo $nama; ?></td>
                </tr>
                <tr>
                    <td>No. IC:</td>
                    <td><?php echo $ic; ?></td>
                </tr>
                <tr>
                    <td>Date:</td>
                    <td><?php echo $date; ?></td>
                </tr>
                <tr>
                    <td>Duration:</td>
                    <td><?php echo $duration; ?></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><?php echo 'RM' . $price; ?></td>
                </tr>
                <tr>
                    <td>Noted:</td>
                    <td><?php echo $details; ?></td>
                </tr>
            </table>
        </div>
        <button class="print" onclick="printSpecificArea()">Print Receipt</button>
    </center>
    <?php include 'footer.php'; ?>
</body>

<script>
    function printSpecificArea() {
      const printContent = document.getElementById("printArea").innerHTML;
      const originalContent = document.body.innerHTML;
      document.body.innerHTML = printContent;
      window.print();
      document.body.innerHTML = originalContent;
    }
</script>

</html>
