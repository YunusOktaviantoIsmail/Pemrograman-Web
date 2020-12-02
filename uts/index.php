<?php
include('conn.php');
?>

<html>

<head>
    <title>Barokah Minimarket</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.jfif">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>BAROKAH MINIMARKET</h1> <br>
    <div class="container">
        <div class="tabel">
            <button onclick="window.location.href='<?php echo "form.php"; ?>'">Tambah Data</button>
            <br><br>
            <form action="search.php" method="GET">
                <label>Cari Barang : </label>
                <input type="text" name="search">
                <input type="submit" value="Cari">
            </form>

            <form action="filter.php" method="POST">
                <table>
                    <tr>
                        <td colspan="3">Range Harga</td>
                    <tr>
                        <td>
                            <label for="min_harga">Min : </label>
                            <input type="text" name="min_harga" id="min_harga">
                        </td>

                        <td>
                            <label for="max_harga">Max : </label>
                            <input type="text" name="max_harga" id="max_harga">
                        </td>
                        <td>
                            <button type="submit" name="submitfilter">Filter</button>
                        </td>
                    </tr>
                    </tr>
                </table>
            </form>


            <?php
            $query = "SELECT * FROM barang";
            $result_brg = mysqli_query(connection(), $query);
            ?>

            <table border="1px">
                <tr>
                    <th>SKU</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga Satuan</th>
                    <th colspan="2">Action</th>
                </tr>

                <?php while ($data = mysqli_fetch_array($result_brg)) : ?>
                    <tr>
                        <td><?php echo $data['sku']; ?></td>
                        <td><?php echo $data['nama_barang']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td><?php echo $data['stok_barang']; ?></td>
                        <td><?php echo $data['harga_satuan']; ?></td>
                        <td>
                            <a href="http://localhost/uts/update.php?id=<?php echo $data['sku'] ?>">Update</a>
                        </td>
                        <td>
                            <a href="http://localhost/uts/delete.php?id=<?php echo $data['sku'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php endwhile ?>
            </table>
        </div>
    </div>
</body>

</html>