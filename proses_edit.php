<?php
include('lib/koneksipdo.php');

$kode = $_POST['kode'];
$nama_produk = $_POST['nama'];
$harga_produk = $_POST['harga'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url = $_POST['url'];
$stok = $_POST['stok'];

$result = $con->exec("UPDATE `databarang` SET `kode_produk` = $kode, `nama_produk` = '$nama_produk',`harga_produk` = '$harga_produk', `satuan`= '$satuan', `kategori` = '$kategori', `url_gambar` = '$url', `stok` = '$stok' WHERE `databarang`.`kode_produk` = $kode");

if ($result == true) {
    header("location:proses_simpan.php");
}else{
    echo"data gagal EDIT";
}

?>