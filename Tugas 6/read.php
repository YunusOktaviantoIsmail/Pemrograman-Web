<?php
require 'conn.php';
global $conn;
global $print;

$query = "SELECT * FROM education ORDER BY tahun DESC";

$result = mysqli_query($conn, $query);
$read = mysqli_num_rows($result);

if ($read > 0) {
    foreach ($result as $res) {
        $print .= '
		<tr>
			<td>' . $res["sekolah"] . '</td>
			<td>' . $res["tahun"] . '</td>
			<td><button type="button" name="delete" id="' . $res["id"] . '" class="btn btn-danger btn-xs delete">X</button></td>
		</tr>';
    }
} else {
    $print .= '
	<tr>
		<td colspan="3">Belum ada data</td>
	</tr>
	';
}

echo $print;
