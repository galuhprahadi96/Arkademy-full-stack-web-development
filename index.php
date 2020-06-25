<?php
include('konfig.php');
$db = new konfig();
$data = $db->tampil_data();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>

<body>
    <table border="1px solid black">
        <thead>
            <tr>
                <td>No</td>
                <td>Produk</td>
                <td>Keterangan</td>
                <td>harga</td>
                <td>jumlah</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody align="center">

            <h1>Data Produk</h1>
            <a href="add.php">Tambah Data</a>
            <?php $no = 1;
            if ($data === "data kosong") { ?>
                <tr></tr>
                <?php } else {
                foreach ($data as $list) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $list['nama_produk']; ?></td>
                        <td><?php echo $list['keterangan']; ?></td>
                        <td><?php echo $list['harga']; ?></td>
                        <td><?php echo $list['jumlah']; ?></td>
                        <td>
                            <a href="edit.php?id_produk=<?php echo $list['id_produk'] ?>">Edit</a> |
                            <a href="proses.php?aksi=hapus&id_produk=<?php echo $list['id_produk'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>