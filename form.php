<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="from">
    <form action ="save.php" method="POST">
     <table class="table" border="0" align="center" style="width: 40%;text-align: center;margin-top: 3%;">
      <tr class="table-primary">
        <td colspan = "2"><h1>Form Input Master dan Stok Data Barang</h1></td>
      </tr>
 <tr>  
     <td>
       <div class="form-group">
         <label for="exampleInputEmail1">Nama Produk</label>
         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama"> 
       </div>
     </td>
 </tr>
 <tr>
     <td>
       <div class="form-group">
         <label for="exampleInputEmail1">Harga Produk</label>
         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="harga">
       </div>
     </td>
 </tr>
 <tr>
    <td >
    <div class="form-group">
    <label for="exampleFormControlSelect1">Satuan</label>
    <select class="form-control" id="exampleFormControlSelect1" name="satuan">
     <option value="-"> Pilih Jenis...</option>
     <option value="Pcs"> Pcs </option>
     <option value="Kg"> Kg </option>
     <option value="Liter"> Liter </option>
     <option value="Unit"> Unit </option>
    </select>
  </div> 
  </td>   
 </tr>
 <tr>
    <td>
    <div class="form-group">
     <label for="exampleFormControlSelect1">Kategori</label>
      <select class="form-control" id="exampleFormControlSelect1" name="kategori">
        <option value="-"> Pilih Kategori...</option>
        <option value="Makanan"> Makanan </option>
        <option value="Elektronik"> Elektronik </option>
        <option value="Alat Rumah Tangga"> Alat Rumah tangga </option>
      </select>
    </td>
</tr>
<tr>
  <td>
    <div class="form-group">
      <label for="exampleInputEmail1">Url Gambar</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="url">
    </div>
  </td>
 </tr>
 <tr>
<tr>
  <td>
    <div class="form-group">
      <label for="exampleInputEmail1">Stok</label>
      <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stok">
    </div>
  </td>
 </tr>
 <tr>
    <td colspan="2">
     <div class="form-group">
      <center>
       <button type='button' class='btn btn-warning'> 
          <a style="text-decoration: none;color:white" href='proses_simpan.php'>Lihat Data</a>
        </button>&nbsp
        <Input type="submit" name="btn_submit" class="btn btn-primary" value="Submit"></Input></center>
      </div>
    </form>
  </div>
</td>
</tr>
</table>
</body>
</html>