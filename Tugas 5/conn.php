<?php

function connection()
{
    $dbServer = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = "data_cv";

    $conn = mysqli_connect($dbServer, $dbUser, $dbPass);

    if (!$conn) {
        die('Koneksi Gagal: ' . mysqli_error());
    }

    mysqli_select_db($conn, $dbName);

    return $conn;
}
