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
 		$idt = $HTTP_GET_VARS['ide'];

		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "DELETE FROM ".$etiquetas." WHERE idetiqueta=".$idt.";";
		$result= mysql_db_query($dbase,$consulta);
		mysql_close($ident);
echo "<script>parent.leftFrame3.document.location.href='del_izq.php?t=1';</script>\n";
echo "<script>parent.mainFrame3.document.location.href='del_der.php?t=1';</script>\n";

 
}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n"; }
 ?>
</div>
</body>
</html>
