<?php
session_start();
ob_start();
include('../../koneksi/koneksi.php');
include('../../koneksi/fungsi_rupiah.php');
$tgl_awal=$_GET['tgl_awal'];
$tgl_akhir=$_GET['tgl_akhir'];
$sql = mysql_query("SELECT * FROM barang_keluar, detail_barang_keluar WHERE barang_keluar.id_keluar = detail_barang_keluar.id_keluar AND tgl_keluar BETWEEN '$tgl_awal' AND '$tgl_akhir' ORDER BY detail_barang_keluar.time ASC");
$num_rows=mysql_num_rows($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Laporan Barang Keluar</title>
</head>
<body>
<div id="logo">
<img src="../../mycss/images/BNE.png" align="center" width="491" height="120"></div>
<br>
<div id="title">
 LAPORAN BARANG KELUAR TANGGAL <?php echo "$tgl_awal S/D $tgl_akhir"; ?>
</div>
<br>
<div id="isi">
  <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr class="tr-title">
  	<td>NO</td>
    <td>ID TRANSAKSI</td>
    <td width="50">TANGGAL KELUAR</td>
    <td>DEPARTEMEN</td>
    <td>ID BARANG</td>
	<td>STOK AWAL</td>
	<td width="50">JUMLAH KELUAR</td>
    <td>SUB TOTAL</td>
  </tr>
  <?php
	$total_harga=0;
	$total_barang=0;
	for($i=1; $i<=$num_rows; $i++){
	$rows=mysql_fetch_array($sql);
	$id_keluar=$rows['id_keluar'];
	$tgl_keluar=$rows['tgl_keluar'];
	$outlet=$rows['id_outlet'];
	$id_barang=$rows['id_barang'];
	$stok_awal=$rows['stok_awal'];
	$jml_keluar=$rows['jml_keluar'];
	$id_user=$rows['id_user'];
	// $hrg_beli=format_rupiah($rows['hrg_beli']);
	// $sub_total=format_rupiah($rows['sub_total']);
	$total_barang=$jml_keluar+$total_barang;
	// $total_harga=($rows['sub_total'])+$total_harga;
	echo"	<tr>
			<td>$i</td>
			<td>$id_keluar</td>
			<td>$tgl_keluar</td>
			<td>$outlet</td>
			<td>$id_barang</td>
			<td>$id_user</td>
			<td>$stok_awal</td>
			<td>$jml_keluar</td>
			</tr>";
	}
	echo "<tr>
    <td colspan='7' align='right'>TOTAL</td>
    <td>$total_barang</td>

  </tr>";
 ?>
  
</table>
</div>

</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="Laporan Barang Keluar.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
$content = ob_get_clean();
	$content = '<page style="font-family: freeserif">'.($content).'</page>';
	require_once('../../html2pdf_v4.03/html2pdf.class.php');
	try
	{
		$html2pdf = new HTML2PDF('P','A4','en', false, 'ISO-8859-15',array(20, 10, 10, 10));
		$html2pdf->setDefaultFont('Arial');
		$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		$html2pdf->Output($filename);
	}
	catch(HTML2PDF_exception $e) { echo $e; }
?>