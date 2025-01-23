<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pelajar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: linear-gradient(to right, #617fff, #f89d79);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            font-family: "Arial", sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container mx-auto">
           <form method="post">
    <h2 class="text-center mb-4">Tambah Pelajar</h2>
    <div class="mb-3">
        <label for="idPelajar" class="form-label">ID Pelajar:</label>
        <input type="text" id="idPelajar" class="form-control" name="bil" placeholder="Masukkan ID Pelajar">
    </div>
    <div class="mb-3">
        <label for="namaPelajar" class="form-label">Nama:</label>
        <input type="text" id="namaPelajar" class="form-control" name="nama" placeholder="Masukkan Nama Pelajar">
    </div>
    <div class="mb-3">
        <label for="icPelajar" class="form-label">No. IC:</label>
        <input type="text" id="icPelajar" class="form-control" name="no_kp" placeholder="Masukkan No. IC Pelajar">
    </div>
    <div class="mb-3">
        <label for="alamatPelajar" class="form-label">Alamat Pelajar:</label>
        <textarea id="alamatPelajar" rows="4" class="form-control" name="alamat_rumah" placeholder="Masukkan Alamat Pelajar"></textarea>
    </div>
    <div class="mb-3">
        <label for="sekolahLama" class="form-label">Sekolah Lama:</label>
        <input type="text" id="sekolahLama" class="form-control" name="sekolah_lama" placeholder="Masukkan Sekolah Lama Pelajar">
    </div>
    <div class="text-center">
        <button type="submit" name="hantar" class="btn btn-primary w-100">Tambah</button>
    </div>
</form>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
include('config.php');

if (isset($_POST['hantar'])) {
    $bil = $_POST['bil'];
    $nama = $_POST['nama'];
    $no_kp = $_POST['no_kp'];
    $alamat_rumah = $_POST['alamat_rumah'];
    $sekolah_lama = $_POST['sekolah_lama'];

    if ($connect) {
        $query = "INSERT INTO pelajar (bil, nama, no_kp, alamat_rumah, sekolah_lama) 
                  VALUES ('$bil', '$nama', '$no_kp', '$alamat_rumah', '$sekolah_lama')";
        if (mysqli_query($connect, $query)) {
            // Redirect after success
            header('Location: index.php');
            exit();
        } else {
            // Debugging the SQL query
            echo "Error: " . mysqli_error($connect);
        }
    } else {
        echo "Database connection failed!";
    }
}
?>
</html>
