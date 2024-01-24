<?php
include 'koneksi.php';

// Fetch data from database
$query = "SELECT * FROM inventory";
$result = $dbconnect->query($query);

// Check if the query was successful
if (!$result) {
    die("Error: " . $dbconnect->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Inventory Data</h2>
    <a href="tambah.php" class="btn btn-outline-info mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Uraian Barang</th>
                <th>Distributor</th>
                <th>Kwantitas</th>
                <th>Tahun</th>
                <th>Asal Barang</th>
                <th>Tgl. Perolehan</th>
                <th>Keadaan Barang</th>
                <th>Harga</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $no++ . "</td>";
                    echo "<td>" . $row['tanggal'] . "</td>";
                    echo "<td>" . $row['kode_barang'] . "</td>";
                    echo "<td>" . $row['nama_barang'] . "</td>";
                    echo "<td>" . $row['uraian_barang'] . "</td>";
                    echo "<td>" . $row['distributor'] . "</td>";
                    echo "<td>" . $row['kwantitas'] . "</td>";
                    echo "<td>" . $row['tahun'] . "</td>";
                    echo "<td>" . $row['asal_barang'] . "</td>";
                    echo "<td>" . $row['tgl_perolehan'] . "</td>";
                    echo "<td>" . $row['keadaan_barang'] . "</td>";
                    echo "<td>" . $row['harga'] . "</td>";
                    echo "<td>" . $row['keterangan'] . "</td>";
                    echo "<td><a href='edit.php?id=" . $row['id'] . "' class='btn btn-warning btn-sm'>Edit</a> <a href='hapus.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Hapus</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='13'>Tidak ada data</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <!-- Optional: Add Bootstrap JS and Popper.js scripts if needed -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>