<?php 
session_start();
if(empty($_SESSION['id_user'])&&empty($_SESSION['level'])){
header("location:login.php");
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Stok</title>
<link rel="stylesheet" type="text/css" href="mycss/index.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/panel.css" />
<script type="text/javascript" src="jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="jquery_easyui/jquery.easyui.min.js"></script>
<script>
function addTab(title, url){
			if ($('#tt').tabs('exists', title)){
				$('#tt').tabs('select', title);
			} else {
				var content = '<iframe scrolling="auto" frameborder="0"  src="'+url+'" style="width:100%;height:100%;"></iframe>';
				$('#tt').tabs('add',{
					title:title,
					content:content,
					closable:true
				});
			}
		}
	</script>
</head>

<body>
<div id="header">
</div>
<div id="navigasi">
<div style="width:200px;height:auto;padding:5px;float:left; margin-right:10px;background:#7190E0; ">
<div class="easyui-panel" title="DATA MASTER" collapsed="true" collapsible="true" style="width:200px;height:auto;padding:10px;">
<?php
if(($_SESSION['level']=='it'))
{
echo
'<a href="#" class="easyui-linkbutton" iconCls="icon-user" plain="true" onClick="addTab(\'Data User\',\'user.php\')">Data User</a><br />';
} else {
echo "";
}
?>
<?php
if(($_SESSION['level']=='it'))
{
echo
'<a href="#" class="easyui-linkbutton" iconCls="icon-shop" plain="true" onClick="addTab(\'Data Departemen\',\'outlet.php\')">Data Departemen</a><br />';
} else {
echo "";
}
?>

<?php
if(($_SESSION['level']=='user'))
{
echo
'<a href="#" class="easyui-linkbutton" iconCls="icon-supplier" plain="true" onClick="addTab(\'Data Supplier\',\'supplier.php\')">Data Supplier</a><br/>';
} else {
echo "";
}
?>

<a href="#" class="easyui-linkbutton" iconCls="icon-box" plain="true" onClick="addTab('Jenis Barang','jenis_barang.php')">Jenis Barang</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-box-fill" plain="true" onClick="addTab('Data Barang','barang.php')">Data Barang</a><br />
</div>
<br/>



<div class="easyui-panel" title="TRANSAKSI" collapsible="true" style="width:200px;height:auto;padding:10px;">
<?php
if(($_SESSION['level']=='admin 1')||($_SESSION['level']=='admin 2') || ($_SESSION['level']=='it'))
{
echo 
'<a href="#" class="easyui-linkbutton" iconCls="icon-trolly" plain="true" onClick="addTab(\'Barang Masuk\',\'barang_masuk.php\')">Barang Masuk</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-truck" plain="true" onClick="addTab(\'Barang Keluar\',\'barang_keluar.php\')">Barang Keluar</a><br />';
} else {
echo "";
}
?>

</div><br />
<div class="easyui-panel" title="LAPORAN" collapsible="true"  style="width:200px;height:auto;padding:10px;">

<a href="#" class="easyui-linkbutton" iconCls="icon-report2" plain="true" onClick="addTab('Laporan Barang Masuk','laporan/barang_masuk/pilih_lap.php')">Barang Masuk</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report3" plain="true" onClick="addTab('Laporan Barang Keluar','laporan/barang_keluar/pilih_lap.php')">Barang Keluar</a><br />
<a href="#" class="easyui-linkbutton" iconCls="icon-report4" plain="true" onClick="addTab('Laporan Stok Barang','laporan/stok_barang/pilih_lap.php')">Stok Barang</a>
</div>
<div class="easyui-panel" title="AKSES" collapsible="true"  style="width:200px;height:auto;padding:10px;">
<a href="akses/logout.php" class="easyui-linkbutton" iconCls="icon-logout" plain="true">Logout</a>
</div>
</div>
</div>
<div id="isi">
<div id="tt" class="easyui-tabs" style="height:500px;">
<div title="Home" style="padding-top:;  text-align:left; background-image:url(mycss/images/.png);  background-repeat:no-repeat; " >

<?php
include 'koneksi/fungsi_tanggal.php';
include 'koneksi/library.php';
 
 echo "<h2>Selamat Datang</h2>";
 echo " <b>$_SESSION[nm_user] </b> di Aplikasi Sistem Informasi Gudang.";
 echo " <br> Sistem Informasi ini digunakan untuk efektifitas dan efisiensi kegiatan pergudangan.</br>";
 echo " <br> Gudang chemical & sparepart tidak bisa dipandang sebelah mata, mengingat setiap elemen struktural perusahaan memiliki kontribusi yang sama penting dan besar bagi keberlangsungan perusahaan. Gudang chemical & sparepart dibutuhkan sebagai ruang tempat penyimpanan sementara di dalam proses koordinasi penyaluran barang bahan penunjang guna proses transformasi menjadi barang jadi di dalam proses produksi. Proses kegiatan operasional produksi dilakukan dengan tujuan untuk meningkatkan nilai guna suatu benda dalam memenuhi kebutuhan dimana didalam proses transformasi tersebut memerlukan adanya bahan penunjang (supporting material).</br>";
 echo " <br> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - - - - - - - - - - - - - -</br>"; 
 echo " <br> Sistem Informasi ini di rancang guna untuk memenuhi Tugas Akhir guna sebagai salah satu syarat kelulusan program D4 jurusan Manajemen Informatika di Sekolah Tinggi Elektronika dan Komputer </br>";
 
 echo"<p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p> <p>&nbsp;</p>
          <b><p align=right>Login : $hari_ini, ";
  echo (date("d-M-Y")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p></b>";
  ?>
</div>

</div>

</div>
<div id="footer">
Copyright &copy; - Warehouse Dept - <?php echo date("Y"); ?> - <a href="" target="_blank"><span class="cls_hdt"></span>  <?php echo $_SESSION["nm_user"]; ?></a>
</div>
</body>
</html>
<?php } ?>