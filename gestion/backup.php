<?php
	session_start();
	session_register('usuario');
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
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
				
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$consulta = "SELECT * FROM ".$frase." ORDER BY id DESC;";
				$result = mysql_db_query($dbase, $consulta);
				while($linea = mysql_fetch_row($result)){
				
				print("<strong>".$linea[0]."</strong> <br> ".$linea[2]."<br>[Votos: ".$linea[1]." / Total: ".$linea[6]." / Fecha: ".$linea[3]." / Categoria: ".$linea[4]." / Autor: ".$linea[5]."]<br><br>");
				
				}
				
					}else{
		print('<tr><td><br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font></td> </tr>');
		echo "<script>document.location.href='index.php';</script>\n";
	}
?>
</body>
</html>
