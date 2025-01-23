<?php 
    include('config.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to right, #617fff, #f89d79);
            min-height: 100vh;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .table-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 1200px;
            width: 100%;
        }
        h2 {
            font-family: "Fira Sans", sans-serif;
        }
        table {
            font-family: "Lato", sans-serif;
        }
        .btn-custom {
            background-color: #C2E6F7;
            color: black;
            font-weight: bold;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .btn-custom:hover {
            background-color: orange;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container table-container">
        <h2 class="text-center mb-4">Senarai Pelajar KPD Batch 09 2025</h2>
        <table class="table table-striped table-bordered text-center">
            <thead class="table-primary">
                <tr>
                    <th>Id Pelajar</th>
                    <th>Nama</th>
                    <th>No. IC</th>
                    <th>Alamat Rumah</th>
                    <th>Sekolah Lama</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $papar = mysqli_query($connect, "SELECT * FROM pelajar");
                while($row = mysqli_fetch_array($papar)) {
                    $bil = $row['bil'];
                    $nama = $row['nama'];
                    $no_kp = $row['no_kp'];
                    $alamat_rumah = $row['alamat_rumah'];
                    $sekolah_lama = $row['sekolah_lama'];
                    echo "
                    <tr>
                        <td>$bil</td>
                        <td>$nama</td>
                        <td>$no_kp</td>
                        <td>$alamat_rumah</td>
                        <td>$sekolah_lama</td>
                    </tr>";
                } 
                ?>
            </body>
        </table>
        <div class="text-center">
            <form action="tambah.php">
                <button type="submit" class="btn btn-custom px-4">Tambah Pelajar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
