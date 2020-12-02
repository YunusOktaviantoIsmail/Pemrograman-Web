<?php
include('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $stok_barang = $_POST['stok_barang'];
    $harga_satuan = $_POST['harga_satuan'];

    $query = "UPDATE barang 
            SET sku = '$sku', nama_barang = '$nama_barang', kategori = '$kategori', stok_barang = '$stok_barang', harga_satuan = '$harga_satuan'
            WHERE sku = '$sku'";
    $hasil = mysqli_query(connection(), $query);

    header("location: http://localhost/uts/");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sku = $_GET['id'];
    $query_get = "SELECT * FROM barang WHERE sku = '$sku'";
    $hasil_get = mysqli_query(connection(), $query_get);
}
?>

<html>

<head>
    <title>Update Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.jfif">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>UPDATE DATA BARANG</h1>
        <form action="update.php" method="POST">
            <table>
                <?php while ($data = mysqli_fetch_array($hasil_get)) : ?>
                    <tr>
                        <td>
                            <label>SKU : </label>
                            <input type="text" name="sku" readonly value="<?php echo $data['sku']; ?>">
                        </td>
                        <td>
                            <label>Nama Barang : </label>
                            <input type="text" name="nama_barang" value="<?php echo $data['nama_barang']; ?>">
                        </td>
                        <td>
                            <label>Kategori : </label>
                            <select name="kategori">
                                <option selected disabled>-- Pilih Kategori --</option>
                                <option value="Makanan" <?php echo $data['kategori'] == 'Makanan' ? 'selected="selected"' : '' ?>>Makanan</option>
                                <option value="Minuman" <?php echo $data['kategori'] == 'Minuman' ? 'selected="selected"' : '' ?>>Minuman</option>
                                <option value="ATK" <?php echo $data['kategori'] == 'ATK' ? 'selected="selected"' : '' ?>>ATK</option>
                            </select>
                        </td>
                        <td>
                            <label>Jumlah Stok : </label>
                            <input type="text" name="stok_barang" value="<?php echo $data['stok_barang']; ?>">
                        </td>
                        <td>
                            <label>Harga Satuan : </label>
                            <input type="text" name="harga_satuan" value="<?php echo $data['harga_satuan']; ?>">
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <input type="submit" name="submit" value="Update"><br><br>
        </form>
    </div>
</body>

</html>