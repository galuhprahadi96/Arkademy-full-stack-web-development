<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <form action="proses.php?aksi=add" method="post">
        <label>Nama Produk</label><br>
        <input type="text" name="nama_produk" required><br>
        <label>Keterangan</label><br>
        <textarea name="keterangan" cols="30" rows="10"></textarea><br>
        <label>Harga</label><br>
        <input type="number" name="harga" required><br>
        <label>Jumlah</label><br>
        <input type="number" name="jumlah" required><br>
        <input type="submit" value="Add"> |
        <input type="reset" value="reset">
    </form>
</body>

</html>