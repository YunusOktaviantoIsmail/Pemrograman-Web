<?php
include('conn.php');

$status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sku = $_POST['sku'];
    $nama_barang = $_POST['nama_barang'];
    $kategori = $_POST['kategori'];
    $stok_barang = $_POST['stok_barang'];
    $harga_satuan = $_POST['harga_satuan'];

    $query = "INSERT INTO barang (sku,nama_barang,kategori,stok_barang,harga_satuan) VALUES ('$sku','$nama_barang','$kategori','$stok_barang','$harga_satuan')";
    $hasil = mysqli_query(connection(), $query);

    if ($hasil) {
        $status = 'OK';
    } else {
        $status = 'Error';
    }
    header("location: http://localhost/uts/");
}
?>

<html>

<head>
    <title>Tambah Data</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="icon.jfif">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <h1>TAMBAH DATA BARANG</h1>
        <?php
        if ($status == 'OK') {
            echo 'Data Berhasil Disimpan';
        } elseif ($status == 'Error') {
            echo 'Tidak Tersimpan';
        }
        ?>

        <form action="form.php" method="POST">
            <table>
                <tr>
                    <td>
                        <label>SKU : </label>
                        <input type="text" name="sku">
                    </td>
                    <td>
                        <label>Nama Barang : </label>
                        <input type="text" name="nama_barang">
                    </td>
                    <td>
                        <label>Kategori : </label>
                        <select name="kategori">
                            <option selected disabled>-- Pilih Kategori--</option>
                            <option value="Makanan">Makanan</option>
                            <option value="Minuman">Minuman</option>
                            <option value="ATK">ATK</option>
                        </select>
                    </td>
                    <td>
                        <label>Jumlah Stok : </label>
                        <input type="text" name="stok_barang">
                    </td>
                    <td>
                        <label>Harga Satuan : </label>
                        <input type="text" name="harga_satuan">
                    </td>
                </tr>
        </form>
        </table>
        <input type="submit" name="submit" value="Simpan">
    </div>
</body>


</html>