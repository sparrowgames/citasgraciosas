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
<title>FRASES - Inserci&oacute;n de un &quot;Tipo&quot;</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<div align="center"> 
  <p><font size="6"><strong><em>Inserción de una categoria </em></strong></font></p>
  <p>&nbsp;</p>
 <?php
					$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
				print('<form name="form1" method="post" action="add_t2.php">
    <strong>Nombre del nuevo tipo:</strong> 
    <input name="txt1" type="text" maxlength="25">
    - 
    <input type="submit" name="Submit" value="Insertar Tipo">
    - 
    <input name="reset" type="reset">
  </form>
  <form name="form2" action="inserta.php">
    <input type="submit" name="Submit2" value="< Volver">
    <hr>
  </form>
  <table border="1">');
   
				
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$tipo." ORDER BY id ASC;";
				$result = mysql_db_query($dbase, $consulta);
			
				while($linea = mysql_fetch_row($result))
 					print('<tr><td><center><strong>'.$linea[0].'</strong></center></td><td><strong>'.$linea[1].'</strong></td> </tr>');
				mysql_close($ident);
	}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n";}
		?>
  </table>
  
</div>
</body>
</html>
