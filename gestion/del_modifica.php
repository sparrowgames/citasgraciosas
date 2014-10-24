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
<title>FRASES - Modificaci&oacute;n</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<div align="center">
  <p><strong><em><font size="6">MODIFICAC</font><font size="6">I&Oacute;N DE FRASES</font></em></strong></p>
  <p>&nbsp;</p>
  <p> 
  <hr>
    <?php
	$usuario = $_SESSION['usuario'];
	if($usuario!="Anonimo"){

		$id = $HTTP_GET_VARS['id'];
 		$cat = $HTTP_GET_VARS['cat'];

		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = 'UPDATE frases SET tipo="'.$_REQUEST["tp"].'" WHERE id='.$id.';';

		$result = mysql_db_query($dbase, $consulta);
		if(!$result){
			mysql_close($ident);
			print('<font size="4" color="#FF0000"><p>HA OCURRIDO UN ERROR AL INTENTAR MODIFICAR LA FRASE...</p></font>');
		}else{
			mysql_close($ident);
			print('<img src="img/si.jpg" alt="ok">');
			echo "<script>parent.leftFrame3.document.location.href='del_izq.php?t=0';</script>\n";
			echo "<script>parent.mainFrame3.document.location.href='del_cat.php?id=".$id."&cat=".$cat."';</script>\n";
		}

}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');}
?>

</div>
</body>
</html>
