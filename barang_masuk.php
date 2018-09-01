<?php
error_reporting(0);
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/style.css">
<link href="mycss/request.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="jquery_easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="jquery_easyui/jquery.form.js"></script>
<script type="text/javascript" src="libs_js/barang_masuk.js"></script>
</head>

<body>
<div id="cari">
<form action="transaksi/search_barang.php" method="post" id="form_cari">
  Ketik Kode Barang :
  <input name="cari_id_brg" type="text" id="cari_id_brg" />
  <input type="submit" name="cari" id="cari2" value="Cari" />
</form>
</div>
<div id="title">PENCATATAN INTERNAL BARANG MASUK</div>
<div id="data">

 <table width="400" border="1" align="center" cellpadding="0" cellspacing="0" id="tabel_item">
    <tr class="tr_item">
      <td align="center">ID BARANG</td>
      <td align="center">NAMA BARANG</td>
      <td align="center">ID JENIS</td>
      <td align="center">JENIS BARANG</td>

      <td align="center"> STOK</td>
      <td align="center">JUMLAH MASUK</td>
      <td align="center">PILIH</td>
    </tr>

    <form action="transaksi/barang_masuk/save_item.php"  method="post" name="form_item" id="form_item">
     <tr>
      <td><input name="id_barang" type="text" disabled="disabled" id="id_barang" size="15" readonly="readonly" /></td>
      <td><input name="nm_barang" type="text" disabled="disabled" id="nm_barang" size="15" readonly="readonly" /></td>
      <td><label for="id_jenis"></label>
        <input name="id_jenis" type="text" disabled="disabled" id="id_jenis" size="8" readonly="readonly" /></td>
      <td><label for="nm_jenis"></label>
        <input name="nm_jenis" type="text" disabled="disabled" id="nm_jenis" size="10" readonly="readonly" /></td>

      <td><input name="stok" type="text" disabled="disabled" id="stok" size="5" readonly="readonly" /></td>
      <td><input name="jumlah" type="text" disabled="disabled" id="jumlah" size="5" /></td>
      <td><input type="submit" name="tambah_item" id="tambah_item" value="Add Item" /></td>
    </tr>
    </form>

  </table>
</div>
<div id="detail_request">
<table id="dg" title="DATA BARANG MASUK" class="easyui-datagrid" style="height:200px"
			url="transaksi/barang_masuk/get_item_masuk.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
            	<th field="id_barang" width="50">ID BARANG</th>
				<th field="nm_barang" width="50">NAMA BARANG</th>
				<th field="id_jenis" width="50">ID JENIS</th>
				<th field="nm_jenis" width="50">NAMA JENIS</th>
                <th field="jml" width="50">JUMLAH</th>


			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editData()">Edit Data</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeData()">Hapus Data</a>
	</div>

    <div id="dlg" class="easyui-dialog" style="width:400px;height:280px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Edit Jumlah Masuk</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Id Barang:</label>
			  	<input name="id_barang" disabled="disabled" class="easyui-validatebox" >
			</div>
		    <div class="fitem">
				<label>Nama Barang:</label>
			  	<input name="nm_barang" disabled="disabled" class="easyui-validatebox" >
			</div>
            <div class="fitem">
			  	<label>Jenis Barang:</label>
				<input name="nm_jenis" disabled="disabled"  class="easyui-validatebox">
		  	</div>


          <div class="fitem">
			<label>Jml Masuk:</label>
		  	  <input name="jml" class="easyui-numberbox"  required="true" >
			</div>
            </form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveData()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>

    <div id="proses">
    <input type='checkbox' name='term' onClick="Javascript:disab(this, 1);"/>Selesai Menambahkan<br /><br />

<form action="transaksi/barang_masuk/proses.php" method="post" id="form_proses" style="display:none">
<label>Id Transaksi:</label>
<input name="id_trx" type="text" id="id_trx" readonly="readonly" />
<label>Id Supplier:</label>
<select name="id_supplier"  id="id_supplier" >

</select>
<input type="submit" name="proses_request" id="proses_request" value="Proses Transaksi " disabled="disabled" />
  </form>
</div>
</div>
</body>
</html>
