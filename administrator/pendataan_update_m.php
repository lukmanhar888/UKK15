<?php

    include('../config.php');

    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga_barang = $_POST['harga'];

     $sql = mysqli_query($koneksi, "UPDATE tb_barang SET id_barang='$id', nama_barang='$nama_barang', harga_barang='$harga_barang', stok_barang='$stok'  WHERE id_barang='$id'");


     if ($sql) {
        header('location: pendataan_select.php');
    }