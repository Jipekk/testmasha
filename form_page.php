<?php  
    include 'config.php';
    include 'nav.php';

    $booking_type = $_GET['booking_type'];

    $blocked_dates = [];
    $query = "SELECT tarikh FROM announcement";
    $result = mysqli_query($connect, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $blocked_dates[] = $row['tarikh'];
        }
    }

    $booking_type = mysqli_real_escape_string($connect, $_GET['booking_type']);
    $img_query = "SELECT img_book FROM facility WHERE booking_type = '$booking_type'";
    $result = mysqli_query($connect, $img_query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image_data = base64_encode($row['img_book']);
    } 
?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        form_page.php

body {

        }

        .box-hidden {
            height: 700px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            padding-left: 40px;
            padding-top: 50px;
        }

        .user-information {
            background-color: white;
            height: 600px;
            width: 680px;
            padding-top: 25px;
            font-family: "Poppins";
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .box-container {
            background-color: white;
            height: 360px;
            width: 400px;
            margin-left: 30px;
            border-radius: 20px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);       
            padding: 25px 20px 0px 20px;
        }

        .booking-information {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .booking-details {
            text-align: center;
        }

        input {
            margin-bottom: 8px;

        }

        input[type=text] {
            width: 550px;
            height: 30px;
            border-radius: 7px;
            font-size: 15px;
            border: 1px solid black;
        }

        input[type=date]:hover,
        select:hover,
        input[type=text]:hover {
            border: 1px solid blue;
            box-shadow: 
        }

        input[type=submit] {
            width: 110px;
            height: 35px;
            border-radius: 5px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
            font-family: "Poppins";
            font-weight: bold;
            font-size: 15px;
        }

        input[type=submit]:hover {
            opacity: 0.8;
            transition: 0.5s;
        }

        img {

        }

        select {
            width: 558px;
            height: 40px;
            border-radius: 7px;
            font-size: 15px;
            margin-bottom: 14px;
        }

        input[type=date] {
            width: 553px;
            height: 40px;
            border-radius: 7px;
            font-size: 15px;
            border: 1px solid black;
        }

        h2 {
            margin: 0px; 
            font-family: "Poppins";
        }

        .information {
            display: flex;
            justify-content: space-between;
        }

        p {
            font-family: "Roboto";
            margin: 0px;
            margin-bottom: 10px;

        }

        hr {
            background-color: grey;
            width: 400px;
            margin-bottom: 10px;
        }

        h4 {
            margin-top: 0px;
            margin-bottom: 0px;
        }

        h5 {
            margin: 0px;
            font-weight: normal;
            font-family: "Roboto";
        }
    </style>
</head>
<body>
    <div class="box-hidden">
        <center>
            <form action="receipt.php" class="user-information" method="POST">
                <h2>Payment</h2>
                <hr style="width: 600px;">
                <table>
                    <!-- Your original form inputs -->
                    <input type="hidden" name="booking_type" value="<?php echo $booking_type; ?>">
                    <input type="hidden" name="image_data" value="<?php echo $image_data; ?>"> <!-- Add this -->
                    <tr>
                        <td><label>Full Name:</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="full_name" required></td>
                    </tr><tr>
                        <td><label>No. IC:</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="ic"></td>
                    </tr>                
                    <td><input type="hidden" name="booking_type" value="<?php echo $booking_type;?>"></td>
                    <tr>
                        <td><label>Date:</label></td>
                    </tr>
                    <tr>
                        <td><input type="date" name="datee" id="datee" required></td>
                    </tr>
                    <tr>
                        <td><label>Duration:</label></td>
                    </tr>
                    <tr>
                        <td>
                        <select name="duration" id="duration" class="durationInput" required>
                            <option value="1 Hour">Select Duration</option>
                            <option>1 Hour</option>
                            <option>1.5 Hours</option>
                            <option>2 Hours</option>
                            <option>2.5 Hours</option>
                            <option>3 Hours</option>
                            <option>3.5 Hours</option>
                            <option>4 Hours</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td><label>Payment:</label></td>
                    </tr>
                    <tr>
                        <td>
                            <select>
                                <option>Select Payment</option>
                                <option>Maybank</option>
                                <option>BSN</option>
                                <option>CIMB Bank</option>
                                <option>Bank Islam</option>
                                <option>Cash</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label>Details:</label></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="details" required></td>
                    </tr>
                </table>
                <input type="submit" name="hantar" value="Book">
                <input type="hidden" name="price" id="priceInput" value="0">
            </form>
        </center>
        <div class="box-container">
            <center>
                <h2 style="margin-bottom: 10px;">My Cart</h2>
                <hr>
            </center>
            <div class="booking-information">
                <div>
                    <h4 style="font-family: Roboto;"><?php echo $booking_type;  ?></h4>
                </div>
                <div>
                    <img src="data:image/jpeg;base64,<?php echo $image_data ?? base64_encode(file_get_contents('fallback.jpg')); ?>" width="100%" height="75%">
                </div>
            </div><hr>
            <div class="booking-details">
                <h2>Booking Details</h2>
            </div>
            <div class="information">
                <p style="margin-top: 20px;">Booking Name:</p>
                <p style="margin-top: 20px;"><?php echo $booking_type ?></p>
            </div>
            <div class="information">
                <p>Total:</p>
                <p id="price" class="priceDisplay">RM0</p>
               
            </div>
        </div>  
    </div>
<script>
        const blockedDates = <?php echo json_encode($blocked_dates); ?>;
        const dateInput = document.getElementById('datee');

        dateInput.addEventListener('input', () => {
            const selectedDate = dateInput.value;
            if (blockedDates.includes(selectedDate)) {
                alert("This date is blocked. Please choose another date.");
                dateInput.value = "";
            }
        });
    </script>

   <script>
   // Price Calculation Script (unchanged)
        const durationInput = document.getElementById('duration');
        const priceDisplay = document.getElementById('price');
        const priceInput = document.getElementById('priceInput');

        durationInput.addEventListener('change', () => {
            const selectedOption = durationInput.value;
            const duration = parseFloat(selectedOption.split(' ')[0]) || 0;

            // Calculate price
            const price = Math.ceil(duration / 0.5) * 10;

            priceDisplay.textContent = `RM${price}`;
            priceInput.value = price;
        });

        const form = document.querySelector('form');
        form.addEventListener('submit', (event) => {
            const selectedOption = durationInput.value;
            const duration = parseFloat(selectedOption.split(' ')[0]) || 0;
            const price = Math.ceil(duration / 0.5) * 10;
            priceInput.value = price;
        });

</script>

<?php  
    if(isset($_POST['hantar'])) {
        $nama = $_POST['full_name'];
        $ic = $_POST['ic'];
        $booking_type = $_POST['booking_type'];
        $date = $_POST['datee'];
        $duration = $_POST['duration'];
        $price = $_POST['price'];
        $details = $_POST['details'];

        $query = mysqli_query($connect, "INSERT INTO booking_status (full_name, ic, booking_type, datee, duration, price, details) VALUES 
            ('$nama', '$ic', '$booking_type', '$date', '$duration','$price', '$details');");

        if($query) {
            echo "Successful";
        } else {
            echo "Not Successful";
        }
    }
?>
</body>
</html>
