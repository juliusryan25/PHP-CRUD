<?php

include('lib/koneksipdo.php');
$nama_produk = $_POST['nama'];
$harga_produk = $_POST['harga'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$url = $_POST['url'];
$stok = $_POST['stok'];

$result = $con->exec("INSERT INTO `databarang` (`kode_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok`) 
                     VALUES (NULL, '$nama_produk', '$harga_produk', '$satuan', '$kategori', '$url', '$stok')");

if ($result == true) {
    header("location:proses_simpan.php");
}else{
    echo"data gagal disimpan";
}

?>