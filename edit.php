<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch data by ID
    $query = "SELECT * FROM inventory WHERE id = $id";
    $result = $dbconnect->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        // ... (sambungkan dengan input lainnya)
    } else {
        echo "Data tidak ditemukan";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses update data
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $uraian_barang = $_POST['uraian_barang'];
    $distributor = $_POST['distributor'];
    $kwantitas = $_POST['kwantitas'];
    $tahun = $_POST['tahun'];
    $asal_barang = $_POST['asal_barang'];
    $tgl_perolehan = $_POST['tgl_perolehan'];
    $keadaan_barang	 = $_POST['keadaan_barang'];
    $harga = $_POST['harga'];
    $keterangan = $_POST['keterangan'];
    

    $update_query = "UPDATE inventory SET tanggal='$tanggal', kode_barang='$kode_barang', nama_barang='$nama_barang', distributor='$distributor', kwantitas=$kwantitas, tahun=$tahun, asal_barang='$asal_barang', tgl_perolehan='$tgl_perolehan', keadaan_barang='$keadaan_barang', harga=$harga, keterangan='$keterangan' WHERE id=$id";

    if ($dbconnect->query($update_query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $update_query . "<br>" . $dbconnect->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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
    <h2>Edit Data</h2>
    <form method="post" action="">
    <div class="mb-3">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="tanggal">Tanggal:</label>
        <input class="form-control type="text" name="tanggal" value="<?php echo $row['tanggal']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="kode_barang">Kode Barang:</label>
        <input class="form-control  type="text" name="kode_barang" value="<?php echo $row['kode_barang']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="nama_barang">Nama Barang:</label>
        <input class="form-control type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="uraian_barang">Uraian Barang:</label>
        <input class="form-control type="text" name="uraian_barang" value="<?php echo $row['uraian_barang']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="distributor">Distributor</label>
        <input class="form-control type="text" name="distributor" value="<?php echo $row['distributor']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="kwantitas">Kwantitas:</label>
        <input class="form-control type="number" name="kwantitas" value="<?php echo $row['kwantitas']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="tahun">Tahun:</label>
        <input class="form-control type="number" name="tahun" value="<?php echo $row['tahun']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="asal_barang">Asal Barang:</label>
        <input class="form-control type="text" name="asal_barang" value="<?php echo $row['asal_barang']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="tgl_perolehan">tgl_perolehan:</label>
        <input class="form-control type="text" name="tgl_perolehan" value="<?php echo $row['tgl_perolehan']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="keadaan_barang">keadaan_barang:</label>
        <input class="form-control type="text" name="keadaan_barang" value="<?php echo $row['keadaan_barang']; ?>" required>
        <br>
    </div>
    <div class="mb-3">
        <label for="harga">harga:</label>
        <input class="form-control type="text" name="harga" value="<?php echo $row['harga']; ?>" required>
        <br>
    </div>
        <label for="keterangan">Keterangan:</label>
        <input class="form-control type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>" required>
        <br>

        <input class="btn btn-outline-info" type="submit" value="Update">
    </form>
    <br>
    <a href="index.php">Kembali ke Daftar Data</a>
</body>
</html>