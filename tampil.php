<?php
    include('lib/koneksipdo.php');
    $result = $con-> query('SELECT * FROM `databarang`');
    echo "<table border=1>";
    echo "<th>Username</th>";
    foreach($result as $d) : echo "<tr><td>".$d['kode_produk']."</td></tr>";
    endforeach;
    echo "</table>";
?>