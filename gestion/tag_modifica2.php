<?php
	session_start();
	session_register('usuario');
	session_register('d');
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
	$d=$_SESSION['d'];
	if(!$d){
		$_SESSION['d'] = 0;
	}else{
		$_SESSION['d'] = 1 - $d;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php
$usuario = $_SESSION['usuario'];
if($usuario!="Anonimo"){
				
	$ide=$HTTP_GET_VARS['ide'];
	if(!$ide){
		print('<br><br><div align="center"><font color="#FF0000"><strong>...ERROR...</strong></font>');
		echo "<script>document.location.href='tag_modifica.php';</script>\n";
	}else{
		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = 'UPDATE '.$etiquetas.' SET etiqueta="'.$_REQUEST["textfield"].'" WHERE idetiqueta='.$ide.';';

		$result = mysql_db_query($dbase, $consulta);
		if(!$result){
			print('<font size="4" color="#FF0000"><p align="center">HA OCURRIDO UN ERROR AL INTENTAR RENOMBRAR LA ETIQUETA...</p></font>');
		}else{
			print('<font size="4" color="#006600"><p align="center">Se ha modificado la etiqueta.</p></font>');
		}
		
		
		echo "<script>document.location.href='tag_modifica.php';</script>\n";
	}
}else{
	print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
	echo "<script>document.location.href='index.php';</script>\n";
}
?>
</body>
</html>
