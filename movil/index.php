<?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
	
	session_register('tiponavegador');
	//$_SESSION['tiponavegador'] = false;
	
//	session_register('ide');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>citasgraciosas.com</title>
<style type="text/css">
<!--
.Estilo2 {font-size: x-small;font-style: italic;}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: xx-small}

-->
</style>

</head>
<body>
<div align="center">
  <p><img src="../images/titulomovil.png" width="233" height="42" /></p>
</div>
<?php echo "<script>document.location.href='movil.php?ide=".$ide."';</script>\n"; ?>
</body>

</html>
