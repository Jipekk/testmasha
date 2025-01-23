<?php  
    include 'config.php';

    $id = mysqli_real_escape_string($conn, $_GET['id']);

    // Fetch existing data for the given ID
    $query = "SELECT * FROM alumni WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $nama = $row['nama'];
        $jantina = $row['jantina'];
        $no_tel = $row['no_tel'];
        $alamat = $row['alamat'];
        $tahun_grad = $row['tahun_grad'];
        $status = $row['status'];
    } else {
        echo "No data found for the given ID.";
        exit();
    }

    if (isset($_POST['update'])) {
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $nama = mysqli_real_escape_string($conn, $_POST['nama']);
        $jantina = mysqli_real_escape_string($conn, $_POST['jantina']);
        $no_tel = mysqli_real_escape_string($conn, $_POST['no_tel']);
        $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
        $tahun_grad = mysqli_real_escape_string($conn, $_POST['tahun_grad']);
        $status = mysqli_real_escape_string($conn, $_POST['status']);

        $updateQuery = "UPDATE alumni 
                        SET nama='$nama', jantina='$jantina', no_tel='$no_tel', alamat='$alamat', tahun_grad='$tahun_grad', status='$status' 
                        WHERE id='$id'";

        if (mysqli_query($conn, $updateQuery)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kemaskini Maklumat</title>
</head>
<body>
    <center>
        <form name="update" method="post">
            <h3>KEMASKINI MAKLUMAT</h3>
            <table>
                <tr>
                    <td>NO ID:</td>
                    <td><input type="text" name="id" value="<?php echo htmlspecialchars($id); ?>"></td>
                </tr>
                <tr>
                    <td>NAMA PELAJAR</td>
                    <td><input type="text" name="nama" value="<?php echo htmlspecialchars($nama); ?>"></td>
                </tr>
                <tr>
                    <td>JANTINA</td>
                    <td>
                        <select name="jantina">
                            <option value="Lelaki" <?php echo ($jantina == "Lelaki") ? "selected" : ""; ?>>Lelaki</option>
                            <option value="Perempuan" <?php echo ($jantina == "Perempuan") ? "selected" : ""; ?>>Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>NO TEL</td>
                    <td><input type="text" name="no_tel" value="<?php echo htmlspecialchars($no_tel); ?>"></td>
                </tr>
                <tr>
                    <td>ALAMAT</td>
                    <td><textarea name="alamat" rows="3" cols="25"><?php echo htmlspecialchars($alamat); ?></textarea></td>
                </tr>
                <tr>
                    <td>TAHUN GRADUATE:</td>
                    <td><input type="text" name="tahun_grad" value="<?php echo htmlspecialchars($tahun_grad); ?>"></td>
                </tr>
                <tr>
                    <td>STATUS:</td>
                    <td><input type="text" name="status" value="<?php echo htmlspecialchars($status); ?>"></td>
                </tr>
            </table>
            <input type="submit" name="update" value="Kemaskini">
        </form>
    </center>
</body>
</html>
