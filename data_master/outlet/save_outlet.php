<?php 
$id_outlet = $_REQUEST['id_outlet'];
$nm_outlet = $_REQUEST['nm_outlet'];
$almt = $_REQUEST['almt_outlet'];
$pass = $_REQUEST['password'];

include('../../koneksi/koneksi.php');

$sql = "INSERT INTO outlet(id_outlet,nm_outlet,almt_outlet,password) VALUES('$id_outlet','$nm_outlet','$almt','$pass')";
$result = @mysql_query($sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>