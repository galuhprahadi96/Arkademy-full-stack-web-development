<?php

include 'konfig.php';
$db = new konfig();

$aksi = $_GET['aksi'];
if ($aksi == "add") {
    $db->input($_POST['nama_produk'], $_POST['keterangan'], $_POST['harga'], $_POST['jumlah']);
    header("location:index.php");
} elseif ($aksi == "update") {
    $db->update($_POST['id_produk'], $_POST['nama_produk'], $_POST['keterangan'], $_POST['harga'], $_POST['jumlah']);

    header("location:index.php");
} elseif ($aksi == "hapus") {
    $db->delete($_GET['id_produk']);
    header("location:index.php");
}
