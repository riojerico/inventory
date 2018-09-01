<?php
session_start();
include('../../koneksi/koneksi.php');
$id_trx=$_SESSION['id_trx_masuk'];
$id_barang=$_POST['id_barang'];
$jumlah=$_POST['jumlah'];
$hrg_beli=$_POST['hrg_beli'];
$sub_total=$jumlah*$hrg_beli;
$query_insert=sprintf(")");
$sql_insert=mysql_query("INSERT INTO temp_barang VALUES('','$id_trx','$id_barang','$jumlah',now())");
?>