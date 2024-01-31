<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'inventaris_barang');

$dbconnect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (!$dbconnect) {
    die('Connection failed: ' . mysqli_connect_error());
}

function tampilan($query)
{
    global $dbconnect;
    $result = mysqli_query($dbconnect, $query);
    if (!$result) {
        die('Query failed: ' . mysqli_error($dbconnect));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function inputdata($query)
{
    global $dbconnect;
    $result = mysqli_query($dbconnect, $query);
    
    if (!$result) {
        die('Query failed: ' . mysqli_error($dbconnect));
    }

    return $result;
}
?>