<?php
require 'conn.php';
global $conn;

if (isset($_POST["id"])) {
    $query = "DELETE FROM education WHERE id = '" . $_POST['id'] . "'";
    mysqli_query($conn, $query);
}
