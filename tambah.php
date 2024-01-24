<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses tambah data
    $tanggal = $_POST['tanggal'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $uraian_barang = $_POST['uraian_barang'];
    $distributor = $_POST['distributor'];
    $kwantitas = $_POST['kwantitas'];
    $tahun = $_POST['tahun'];
    $asal_barang = $_POST['asal_barang'];
    $tgl_perolehan = $_POST['tgl_perolehan'];
    $keadaan_barang = $_POST['keadaan_barang'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];

    // Use prepared statement to prevent SQL injection
    $insert_query = $dbconnect->prepare("INSERT INTO inventory (tanggal, kode_barang, nama_barang, uraian_barang, distributor, kwantitas, tahun, asal_barang, tgl_perolehan, keadaan_barang, harga, keterangan) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters
    $insert_query->bind_param("sssssiisssds", $tanggal, $kode_barang, $nama_barang, $uraian_barang, $distributor, $kwantitas, $tahun, $asal_barang, $tgl_perolehan, $keadaan_barang, $harga, $keterangan);

    // Execute the query
    if ($insert_query->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $insert_query->error;
    }

    // Close the statement
    $insert_query->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        /* Add some custom styles if needed */
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
        }
        h2 {
            color: #8E44AD;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Tambah Data</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="text" class="form-control" name="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="kode_barang" class="form-label">Kode Barang:</label>
                <input type="text" class="form-control" name="kode_barang" required>
            </div>
            <div class="mb-3">
                <label for="nama_barang" class="form-label">Nama Barang:</label>
                <input type="text" class="form-control" name="nama_barang" required>
            </div>
            <div class="mb-3">
                <label for="uraian_barang" class="form-label">Uraian Barang:</label>
                <input type="text" class="form-control" name="uraian_barang" required>
            </div>
            <div class="mb-3">
                <label for="distributor" class="form-label">Distributor:</label>
                <input type="text" class="form-control" name="distributor" required>
            </div>
            <div class="mb-3">
                <label for="kwantitas" class="form-label">Kwantitas:</label>
                <input type="text" class="form-control" name="kwantitas" required>
            </div>
            <div class="mb-3">
                <label for="tahun" class="form-label">Tahun:</label>
                <input type="text" class="form-control" name="tahun" required>
            </div>
            <div class="mb-3">
                <label for="asal_barang" class="form-label">Asal Barang:</label>
                <input type="text" class="form-control" name="asal_barang" required>
            </div>
            <div class="mb-3">
                <label for="tgl_perolehan" class="form-label">Tanggal Perolehan:</label>
                <input type="text" class="form-control" name="tgl_perolehan" required>
            </div>
            <div class="mb-3">
                <label for="keadaan_barang" class="form-label">Keadaan Barang:</label>
                <input type="text" class="form-control" name="keadaan_barang" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga:</label>
                <input type="text" class="form-control" name="harga" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <input type="text" class="form-control" name="keterangan" required>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-outline-info" value="Tambah">
            </div>
        </form>
        <br>
        <a href="index.php" class="btn btn-outline-secondary">Kembali ke Daftar Data</a>
    </div>

    <!-- Optional: Add Bootstrap JS and Popper.js scripts if needed -->
    <!-- <script src="path/to/popper.js"></script>
         <script src="path/to/bootstrap.js"></script> -->
</body>
</html>