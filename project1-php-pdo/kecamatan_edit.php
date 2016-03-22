<?php 
	error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
	include "lib/config.php";
	$table = "kecamatan";
	$col   = "id_kec";
	$val   = $_GET[id_kec_ur];
	$kec   = $db->fetch_single_row($table,$col,$val);
	$nama_kecamatan  = $kec->nama_kec;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Kecamatan</title>	
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form class="form-horizontal">
	<fieldset>

	<!-- Form Name -->
	<legend>Edit Kecamatan Ini</legend>

	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="nama_kecamatan">Nama Kecamatan</label>  
	  <div class="col-md-4">
	  <input value="<?php echo $nama_kecamatan; ?>" id="nama_kecamatan" name="nama_kecamatan" type="text" placeholder="Isi data kecamatan" class="form-control input-md" required="">
	    
	  </div>
	</div>

	<!-- Button (Double) -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="submit"></label>
	  <div class="col-md-8">
	    <button id="submit" name="submit" class="btn btn-primary">Simpan</button>
	    <button id="reset" name="reset" class="btn btn-default">Batal</button>
	  </div>
	</div>

	</fieldset>
	</form>

</body>
</html>