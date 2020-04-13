<?php
include('lib/koneksipdo.php');

$key = $_GET['key'];
$result = $con->query("DELETE FROM `databarang` WHERE `databarang`.`kode_produk` = $key");
if ($result == true) {
    header("location:proses_simpan.php?info=hapus");
}else{
    echo"data gagal hapus";
}

?>