<?php

class konfig
{
    //set koneksi database
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "arkademy";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }

    //menampilkan data
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "select * from produk");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        if (!empty($hasil)) {
            return $hasil;
        } else {
            return "data kosong";
        }
    }

    //input data
    function input($nama_produk, $ket, $harga, $jumlah)
    {
        $query = "INSERT INTO produk VALUES (null,'$nama_produk','$ket','$harga',$jumlah)";
        mysqli_query($this->koneksi, $query);
    }

    //detail data
    function detail($id_produk)
    {
        $query = "SELECT * FROM produk WHERE id_produk='$id_produk'";
        $result = mysqli_query($this->koneksi, $query);
        return $result->fetch_array();
    }

    //update data
    function update($id_produk, $nama_produk, $ket, $harga, $jumlah)
    {
        $query = "UPDATE produk set nama_produk = '$nama_produk',keterangan = '$ket',harga = '$harga', jumlah = '$jumlah' WHERE id_produk = '$id_produk'";
        mysqli_query($this->koneksi, $query);
    }

    //hapus data 
    function delete($id_produk)
    {
        $query = "DELETE FROM produk where id_produk = '$id_produk'";
        mysqli_query($this->koneksi, $query);
    }
}
