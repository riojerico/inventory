<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/icon.css">
<link rel="stylesheet" type="text/css" href="jquery_easyui/themes/style.css">
<script type="text/javascript" src="jquery_easyui/jquery.min.js"></script>
<script type="text/javascript" src="jquery_easyui/jquery.easyui.min.js"></script>
<script type="text/javascript" src="libs_js/barang.js"></script>
</head>

<body>
<h2>OLAH DATA BARANG</h2>
<div class="info" style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data.</div>
	</div>
	<table id="dg" title="DATA BARANG" class="easyui-datagrid" style="height:350px"
			url="data_master/barang/get_barang.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
            	<th field="id_barang" width="50">ID BARANG</th>
				<th field="nm_barang" width="50">NAMA BARANG</th>
				<th field="id_jenis" width="50">ID JENIS</th>
				<th field="nm_jenis" width="50">NAMA JENIS</th>
                <th field="stok" width="50">STOK</th>
				<th field="satuan" width="50">SATUAN</th>

			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newData()">Data Baru</a>
		
	</div>
    
    <div id="dlg" class="easyui-dialog" style="width:400px;height:340px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Informasi Barang</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Id Barang:</label>
			  	<input name="id_barang" id="id_barang" class="easyui-validatebox" required="true">
			</div>
		    <div class="fitem">
				<label>Nama Barang:</label>
			  	<input name="nm_barang" id="nm_barang" class="easyui-validatebox" required="true">
			</div>
            <div class="fitem">
			  	<label>Jenis Barang:</label>
				<select name="id_jenis"  id="id_jenis" >
                <option></option>
		    	</select>
		  	</div>
          <div class="fitem">
			    <label>Stok:</label>
		  	 	<input name="stok" class="easyui-numberbox" required="true" >
		 	</div>
	    <div class="fitem">
			  	<label>Satuan:</label>
				<select name="satuan"  id="satuan" >
					<option value='' selected>-Pilih-</option>
					<option value='pcs' >pcs</option>
					<option value='unit' >unit</option>
					<option value='kg' >kg</option>
					<option value='m' >meter</option>
					<option value='tb' >tb</option>
                    <option value='liter' >liter</option>
                    <option value='sheet' >sheet</option>
                    <option value='roll' >roll</option>
                    <option value='jerigen' >jerigen</option>
                    <option value='drum' >drum</option>  
                    <option value='tabung' >tabung</option>                      
				</select>
	</div>
        

		</form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveData()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
</body>
</html>