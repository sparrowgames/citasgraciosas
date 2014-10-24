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
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<p align="center"><strong><em><font size="6">GESTI&Oacute;N DE ETIQUETAS </font></em></strong></p>
<?php
				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				$d = $_SESSION['d'];
				echo '<p align="center"><a href="'.$PHP_SELF.'">';
				if($d==o){
					echo '<img src="imgmanos/down.png" width="20" height="20" />';
					$dire='ASC';
				}else{
					echo '<img src="imgmanos/top.png" width="20" height="20" />';
					$dire='DESC';
				}
				$_SESSION['d'] = 1 - $d;
				echo '</a>';
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$etiquetas." ORDER BY etiqueta ".$dire.";";
				$result = mysql_db_query($dbase, $consulta);

				while($linea = mysql_fetch_row($result)){
				//print('<tr><td ><a href="del_cat.php?ide='.$linea[0].'" target="mainFrame3"><img src="img/icono_borrar.gif" width="15" height="17" /></a></td><td><strong>'.$linea[1].'</strong></td> </tr>');}
				print(' <table border="0" align="center">
					  <tr><td>
					  <a href="#"><img src="img/frases.png" width="20" height="20" /></a></td>
					  <td><form id="form1" name="form1" method="post" action="tag_modifica2.php?ide='.$linea[0].'">
						
						  <label></label>    
						  <label>
						  <input type="text" name="textfield" value="'.$linea[1].'"/>
						  </label>
						  <input type="submit" name="Submit" value="Renombrar" />
						</form>
					 </td> </tr>
					</table>
');



				}

				}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n";
			
	}
?>
</body>
</html>
