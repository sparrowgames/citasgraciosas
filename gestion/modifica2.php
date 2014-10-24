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

		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = 'UPDATE frases SET frase="'.$_REQUEST["txt"].'",tipo="'.$_REQUEST["tp"].'",autor="'.$_REQUEST["txtAUT"].'" WHERE id='.$_REQUEST["ides"].';';

		$result = mysql_db_query($dbase, $consulta);
		if(!$result){
			print('<font size="4" color="#FF0000"><p>HA OCURRIDO UN ERROR AL INTENTAR MODIFICAR LA FRASE...</p></font>');
		}else{
			print('<font size="4" color="#006600"><p>Se ha modificado la frase con ID: '.$_REQUEST["ides"].'</p></font>');
			print('<font size="4" color="#000000"><p>'.$_REQUEST["txt"].'</p></font>');
			print('<font size="4"><p>Categoria: '.$_REQUEST["tp"].'</p></font><p><font size="4">Autor: '.$_REQUEST["txtAUT"].'</p></font>');	
		}
mysql_close($ident);
}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');}
?>

</div>
</body>
</html>
