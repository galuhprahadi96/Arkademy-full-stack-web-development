<?php
include 'konfig.php';
$db = new konfig();

$id = $_GET['id_produk'];

if (!is_null($id)) {
    $data = $db->detail($id);
} else {
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>

<body>
    <form action="proses.php?aksi=update" method="post">

        <input type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">
        <label>Nama Produk</label><br>
        <input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>"><br>
        <label>Keterangan</label><br>
        <textarea name="keterangan" cols="30" rows="10"><?php echo $data['keterangan'] ?></textarea><br>
        <label>Harga</label><br>
        <input type="number" name="harga" value="<?php echo $data['harga'] ?>"><br>
        <label>Jumlah</label><br>
        <input type="number" name="jumlah" value="<?php echo $data['jumlah'] ?>"><br>
        <input type="submit" value="Update">

    </form>
</body>

</html>