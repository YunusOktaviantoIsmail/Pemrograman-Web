<?php
require 'conn.php';

global $conn;
$number = count($_POST["jenjang"]);

if ($number > 0) {
    for ($i = 0; $i < $number; $i++) {
        $sekolah = htmlspecialchars($_POST["jenjang"][$i]);
        $tahun = htmlspecialchars($_POST["tahun1"][$i]) . ' - ' . htmlspecialchars($_POST["tahun2"][$i]);

        if (trim($_POST["jenjang"][$i] != '') && trim($_POST["tahun1"][$i] != '') && trim($_POST["tahun2"][$i] != '')) {
            $sql = "INSERT INTO education(sekolah, tahun) VALUES('$sekolah','$tahun')";
            mysqli_query($conn, $sql);
        }
    }
    if (mysqli_affected_rows($conn) > 0) {
        echo "Berhasil Disimpan";
    } else {
        echo "Inputkan dengan lengkap";
    }
}
