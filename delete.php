<?php  
include 'config.php';

if (isset($_GET['id']) && !empty($_GET['id']) && isset($_GET['ic']) && !empty($_GET['ic'])) {
    $id = mysqli_real_escape_string($connect, $_GET['id']);
    $ic = mysqli_real_escape_string($connect, $_GET['ic']);
    
    $result = mysqli_query($connect, "DELETE FROM booking_status WHERE id='$id'");
    
    if ($result) {
        echo "<script>
                alert('Record deleted successfully.');
                window.location.href='booking_status.php?ic=$ic';
              </script>";
    } else {
        echo "<script>
                alert('Failed to delete record.');
                window.location.href='booking_status.php?ic=$ic';
              </script>";
    }
}
