<?php
	session_start();
	session_register('usuario');
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>FRASES - Inserci&oacute;n de Etiquetas</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<div align="center"> 
  <p><font size="7"><strong>Inserción de una etiqueta nueva</strong></font></p>
  <p>&nbsp;</p>
 <?php
					$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
				print('<form name="form1" method="post" action="add_etiq2.php">
    <strong>Nueva etiqueta:</strong> 
    <input name="txt1" type="text" maxlength="25">
    - 
    <input type="submit" name="Submit" value="Insertar">
    - 
    <input name="reset" type="reset">
  </form>
  <form name="form2" action="menu.php">
    <input type="submit" name="Submit2" value="< Volver">
    <hr>
  </form>
  <table border="1">');
				
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$etiquetas.";";
				$result = mysql_db_query($dbase, $consulta);
			
				while($linea = mysql_fetch_row($result)){
 					print('<tr><td><strong>'.$linea[1].'</strong></td> </tr>');
				}
				mysql_close($ident);
	}else{
		print('<tr><td><br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font></td> </tr>');
		echo "<script>document.location.href='index.php';</script>\n";
	}
	print('</table>');
		?>

  
</div>
</body>
</html>
