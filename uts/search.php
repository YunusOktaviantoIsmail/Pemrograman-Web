<?php
include('conn.php');

if (isset($_GET['search'])) {
    $cari = $_GET['search'];
    $query = "SELECT * FROM barang WHERE nama_barang LIKE '%" . $cari . "%' OR sku LIKE '%" . $cari . "%' OR kategori LIKE '%" . $cari . "%'";
    $search = mysqli_query(connection(), $query);
} else {
    $query = "SELECT * FROM barang";
    $search = mysqli_query(connection(), $query);
}
?>

<html>

<head>
    <title>Search</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.jfif">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Hasil Pencarian</h1>

    <?php
    if (isset($_GET['search'])) {
        $cari = $_GET['search'];
    }
    ?>
    <h4><?php echo "<b>Hasil Pencarian : " . $cari . "</b>"; ?></h4>

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

                <?php while ($data = mysqli_fetch_array($search)) : ?>
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