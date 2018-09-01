<?php
session_start();
ob_start();
include('../../koneksi/koneksi.php');
include('../../koneksi/fungsi_rupiah.php');
$tgl_awal=$_GET['tgl_awal'];
$tgl_akhir=$_GET['tgl_akhir'];
$sql = mysql_query("SELECT * FROM barang_masuk, detail_barang_masuk WHERE barang_masuk.id_masuk = detail_barang_masuk.id_masuk AND tgl_masuk BETWEEN '$tgl_awal' AND '$tgl_akhir' ORDER BY detail_barang_masuk.time ASC");
$num_rows=mysql_num_rows($sql);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Barang Masuk</title>
<link rel="stylesheet" type="text/css" href="../../mycss/laporan.css" />
</head>
<body>
<div id="logo">
<img src="" width="132" height="120"></div>
<div id="title">
  <p>LAPORAN BARANG MASUK (INCOMING MATERIAL) TANGGAL <?php echo "$tgl_awal S/D $tgl_akhir"; ?>
    </p>
  </div>
<div id="isi">
  <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr class="tr-title">
  	<td>NO</td>
    <td>ID TRANSAKSI</td>
    <td>TANGGAL</td>
    <td>SUPPLIER</td>
    <td>ID BARANG</td>
	<td>STOK AWAL</td>

    <td width="50">JUMLAH MASUK</td>

  </tr>
<?php
	$total_harga=0;
	$total_barang=0;
	for($i=1; $i<=$num_rows; $i++){
	$rows=mysql_fetch_array($sql);
	$id_masuk=$rows['id_masuk'];
	$tgl_masuk=$rows['tgl_masuk'];
	$supplier=$rows['id_supplier'];
	$id_barang=$rows['id_barang'];
	$stok_awal=$rows['stok_awal'];
	$jml_masuk=$rows['jml_masuk'];
	$hrg_beli=format_rupiah($rows['hrg_beli']);
	$sub_total=format_rupiah($rows['sub_total']);
	$total_barang=$jml_masuk+$total_barang;
	$total_harga=($rows['sub_total'])+$total_harga;
	echo"	<tr>
			<td>$i</td>
			<td>$id_masuk</td>
			<td>$tgl_masuk</td>
			<td>$supplier</td>
			<td>$id_barang</td>
			<td>$stok_awal</td>		
			<td>$jml_masuk</td>	
		</tr>";
	}
	echo "<tr>
    <td colspan='6' align='right'>TOTAL</td>
    <td>$total_barang</td>

  </tr>";
 ?>
  
</table>
</div>


</body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="Laporan Barang Masuk.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
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