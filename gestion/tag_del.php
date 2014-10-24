<?php
	session_start();
		$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Documento sin t&iacute;tulo</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<div align="center"> 
  <?php
 				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
 		$idfrase = $HTTP_GET_VARS['ide'];
		$idetiqueta = $HTTP_GET_VARS['t'];

		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "DELETE FROM ".$relacion." WHERE idfrase=".$idfrase." AND idetiqueta=".$idetiqueta.";";
		$result= mysql_db_query($dbase,$consulta);
		mysql_close($ident);

echo "<script>document.location.href='tags.php?ide=".$idfrase."';</script>\n";
 
}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>'); }
 ?>
</div>
</body>
</html>
