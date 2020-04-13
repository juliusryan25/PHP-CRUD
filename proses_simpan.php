<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>data barang</title>
    <style>
        .red{
            background :red;
            color:white;
        }
    </style>
</head>
<body>

<?php

include('lib/koneksipdo.php');
$result2 = $con->query('SELECT * FROM `databarang`');

if (isset($_GET['info'])) {
    $info = $_GET['info'];
    if ($info=='hapus') {
        echo"<script> alert('berhasil dihapus');</script>";
    }
}
?>    
<div class="card">
  <div class="card-header bg-primary">
   <b style="font-size: 50px;"> Data Barang</b>
    <center><button class="btn btn-warning"><a href="form.php"style="text-decoration: none;">Back</a></button></center>
  </div>
  <div class="card-body">
    <table class='table' border=0 style='width:100%;text-align:center'>
  <tr> 
    <th>Kode_Produk</th>
    <th>Nama_Produk</th>
    <th>Harga_Produk</th>
    <th>Satuan</th>
    <th>Kategori</th>
    <th>Url_Gambar</th>
    <th>Stok</th>
    <th>Action</th>
 </tr>

<?php foreach($result2 as $data) {
    #code
?>
    <tr>
    <td><?php echo $data['kode_produk'];?></td>
    <td><?php echo $data['nama_produk'];?></td>
    <td><?php echo $data['harga_produk'];?></td>
    <td><?php echo $data['satuan'];?></td>
    <td><?php echo $data['kategori'];?></td>
    <td><?php echo "<img src=".$data['url_gambar'].">";?></td>

    <?php if($data['stok']<=5){
        echo "<td class='red'>".$data['stok']."</td>";
    }else{
    echo "<td>".$data['stok']."</td>";
    }
    ?>

    <td>
       <button type='button' class='btn btn-primary'> 
         <a style="text-decoration: none;color:white" href='edit.php?key=<?php echo $data['kode_produk']; ?>'>Edit</a>
       </button>
       <button type='button' class='btn btn-danger'> 
         <a style="text-decoration: none;color:white" href='delete.php?key=<?php echo $data['kode_produk']; ?>'>Delete</a>
       </button>
    </td>
</tr>
<?php } ?>
    </table>
  </div>
</div>
</body>
</html>