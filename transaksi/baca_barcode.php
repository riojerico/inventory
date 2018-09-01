<?php

include('../koneksi/koneksi.php');
$barcode=$_GET['barcode'];

$query_barang="UPDATE barcode SET kode='$barcode' WHERE id=1";
$result = @mysql_query($query_barang);

if (isset($barcode)) {
  echo $barcode. " scanned!";
}


?>
