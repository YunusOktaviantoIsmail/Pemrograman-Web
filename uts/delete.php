<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sku = $_GET['id'];
    $query_get = "DELETE FROM barang WHERE sku = '$sku'";
    $hasil_get = mysqli_query(connection(), $query_get);

    header("location: http://localhost/uts/");
}
