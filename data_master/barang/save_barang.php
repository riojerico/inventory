<?php 
$id_barang = $_REQUEST['id_barang'];
$id_jenis = $_REQUEST['id_jenis'];
$nm_barang = $_REQUEST['nm_barang'];
$stok = $_REQUEST['stok'];
$satuan = $_REQUEST['satuan'];

include('../../koneksi/koneksi.php');
$sql = "INSERT INTO barang(id_barang,id_jenis,nm_barang,stok,satuan) VALUES('$id_barang','$id_jenis','$nm_barang','$stok','$satuan')";
$result = @mysql_query($sql);
if ($result){
echo json_encode(array('success'=>true));
} else {
echo json_encode(array('msg'=>'Some errors occured.'));
}
?>