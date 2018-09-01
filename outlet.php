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
<script type="text/javascript" src="libs_js/outlet.js"></script>
</head>

<body>
<h2>OLAH DATA DEPARTEMEN</h2>
<div class="info" style="margin-bottom:10px">
		<div class="tip icon-tip">&nbsp;</div>
		<div>Klik tombol pada datagrid toolbar untuk melakukan perubahan data departemen.</div>
	</div>
	
	<table id="dg" title="DATA DEPARTEMEN" class="easyui-datagrid" style="height:350px"
			url="data_master/outlet/get_outlet.php"
			toolbar="#toolbar" pagination="true"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
			<tr>
            	<th field="id_outlet" width="50">ID DEPARTEMEN</th>
				<th field="nm_outlet" width="50">NAMA DEPARTEMEN</th>
				<th field="almt_outlet" width="50">DIVISI</th>

			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="newData()">Data Baru</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-edit" plain="true" onclick="editData()">Edit Data</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="removeData()">Hapus Data</a>
	</div>
    
    <div id="dlg" class="easyui-dialog" style="width:400px;height:310px;padding:10px 20px"
			closed="true" buttons="#dlg-buttons">
		<div class="ftitle">Informasi Departemen</div>
		<form id="fm" method="post" novalidate>
			<div class="fitem">
				<label>Id Departemen:</label>
			  	<input name="id_outlet" id="id_outlet" class="easyui-validatebox" required="true">
			</div>
		    <div class="fitem">
				<label>Nama Departemen:</label>
			  	<input name="nm_outlet" class="easyui-validatebox" required="true">
			</div>
            <div class="fitem">
		  	  <label>Divisi:</label>
                <textarea name="almt_outlet" cols="15" rows="3" class="easyui-validatebox" required="true"></textarea>
		  	</div>
            <div class="fitem">
			<label>Password:</label>
		  	  <input name="password" type="password" class="easyui-validatebox" required="true" >
			</div>
         </form>
	</div>
	<div id="dlg-buttons">
		<a href="#" class="easyui-linkbutton" iconCls="icon-ok" onclick="saveData()">Save</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-cancel" onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
	</div>
</body>
</html>