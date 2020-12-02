<?php
include('conn.php');

$min = $_POST["min_harga"];
$max = $_POST["max_harga"];
$query = "SELECT * FROM barang WHERE harga_satuan BETWEEN $min AND $max";
$filter = mysqli_query(connection(), $query);

?>

<html>

<head>
    <title>Filter Range Harga</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.jfif">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>FILTER RANGE HARGA</h1> <br>
    <div class="container">
        <div class="tabel">
            <table border="1px">
                <tr>
                    <th>SKU</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga Satuan</th>
                </tr>

                <?php while ($data = mysqli_fetch_array($filter)) : ?>
                    <tr>
                        <td><?php echo $data['sku']; ?></td>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo $data['stok_barang']; ?></td>
                        <td><?php echo $data['harga_satuan']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <br>
            <button onclick="window.location.href='http://localhost/uts/'">Back</button>
        </div>
    </div>
</body>

</html>