<?php
include('../../koneksi/koneksi.php');
include('../../koneksi/fungsi_rupiah.php');
$id_trx=$_GET['id_trx'];

$query="SELECT * FROM barang,jenis_barang,detail_barang_keluar WHERE barang.id_barang=detail_barang_keluar.id_barang AND barang.id_jenis=jenis_barang.id_jenis AND detail_barang_keluar.id_keluar='$id_trx'";
$sql=mysql_query($query);
$sql_info=mysql_query("SELECT * FROM barang_keluar a join user b ON a.id_user=b.id_user Join outlet c On a.id_outlet=c.id_outlet Join detail_barang_keluar d ON a.id_keluar=d.id_keluar");

//,outlet,user WHERE barang_keluar.id_keluar='$id_trx' AND outlet.id_outlet=barang_keluar.id_outlet
//barang_keluar.id_user=user.id_user");


$rows_info=mysql_fetch_array($sql_info);
$id_outlet=$rows_info['id_outlet'];
$nm_outlet=$rows_info['nm_outlet'];
$almt_outlet=$rows_info['almt_outlet'];
$id_user=$rows_info['id_user'];
$nm_user=$rows_info['nm_user'];
$tgl_trx=$rows_info['tgl_keluar'];
$tgl=substr($tgl_trx,-2);
$bln=substr($tgl_trx,-5,2);
$thn=substr($tgl_trx,-10,4);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bukti Serah Terima Barang Keluar</title>
<link rel="stylesheet" type="text/css" href="../../jquery_easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="../../jquery_easyui/themes/icon.css">
<script type="text/javascript" src="../../jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="../../jquery_easyui/jquery.easyui.min.js"></script>
<style type="text/css">
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
}
</style>
</head>

<body>
<table width="750" border="0" align="center">
  <tr>
    <td><h2>BUKTI SERAH TERIMA BARANG KELUAR</H2>
    </td>
    <TR>
    <TD>NO. DOKUMEN : FM/WHRM/001-00-010417</TD></TR>
  
  <tr>
    <td><h2>-----------------------------------------</h2>
    </td>
  </tr>
  <tr>
    <td>
ID. TRANSAKSI : <?php echo $id_trx ?> <br />
TGL. TRANSAKSI : <?php echo date('d-m-Y'); ?> <br />
      <br />
      RINCIAN BARANG BERIKUT INI DITERIMA OLEH DEPARTEMEN GUDANG<br />
ID DEPARTEMEN : <?php echo $id_outlet; ?> <br />
NAMA DEPARTEMEN : <?php echo $nm_outlet; ?> <br />
<br />
PETUGAS YANG MENCATAT TRANSASKI<br />
ID USER : <?php echo $id_user; ?> <br />
NAMA USER : <?php echo $nm_user; ?> <br /></td>
  </tr>
  <tr>
    <td><br />
      TABEL RINCIAN DATA BARANG<br />
      <br />
      <table width="730" border="1" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>NO</td>
          <td>ID BARANG</td>
          <td>NAMA BARANG</td>
          <td>JENIS BARANG</td>
          <td>QTY</td>
          <td>KETERANGAN</td>
        </tr>
        <?php 
			$i=0;
	 	 	$total_jumlah=0;
	  	//	$total_harga=0;
	  		while($rows=mysql_fetch_array($sql)){
		  $id_barang=$rows['id_barang'];
		  $nm_barang=$rows['nm_barang'];
		  $jumlah=$rows['jml_keluar'];
		  $jenis=$rows['nm_jenis'];
		 // $harga=format_rupiah($rows['hrg_beli']);
		 // $sub_total=format_rupiah($rows['sub_total']);
		  $total_jumlah=$total_jumlah+$jumlah;
		//  $total_harga=$total_harga+($rows['sub_total']);
		  $i++;
	  ?> 
		<tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $id_barang; ?></td>
          <td><?php echo $nm_barang; ?></td>
          <td><?php echo $jenis; ?></td>
          <td><?php echo $jumlah; ?></td>
          <td>&nbsp;</td>
        </tr>  
	<?php } ?>
        <tr>
          <td colspan="4">TOTAL</td>
          <td><?php echo $total_jumlah; ?></td>
          <td>&nbsp;</td>
        </tr>
    </table></td>
  </tr>
  <td><br><span style='float:left; text-align:center;'> Semarang, <?php echo date('d-m-Y'); ?> <br/>
										Yang Menyerahkan<br/></br></br>
								(.............................................)
								<br/><?php echo $nm_user; ?></span>
  <span style='float:right; text-align:center;'> Semarang, <?php echo date('d-m-Y'); ?> <br/>
										Yang Menerima<br/></br></br>
								(.............................................)
								<br/> <?php echo $nm_outlet; ?> <br /></span></td></tr>";
  <tr>
    <td>
    <a href="../../barang_keluar.php" class="easyui-linkbutton" iconCls="icon-back" plain="true"></a>
<a href="#" class="easyui-linkbutton" iconCls="icon-print" plain="true" onclick="print();"></a>
    </td>
  </tr>
</table>
</body>
</html>