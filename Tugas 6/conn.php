<?php

function connection()
{
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = "data_cv";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        die('Koneksi Gagal: ' . mysqli_error($conn));
    }

    return $conn;
}

$conn = connection();
