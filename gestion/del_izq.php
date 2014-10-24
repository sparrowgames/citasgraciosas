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

<body><?php
					$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
				$d = $_SESSION['d'];
				echo '<p align="center"><a href="'.$PHP_SELF.'">';
				if($d==0){
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
				
				switch($HTTP_GET_VARS['t']){
				
					case 0:	print(' <img src="img/cats.png" width="20" height="20" /> <strong><em><font size="6">BORRAR CATEGORIA</font></em></strong></p><table border="0" align="center">');
							$consulta = "SELECT * FROM ".$tipo." ORDER BY tipo ".$dire.";";
							$result = mysql_db_query($dbase, $consulta);
						
							while($linea = mysql_fetch_row($result)){
								print('<tr><td ><a href="del_cat.php?id='.$linea[0].'&cat='.$linea[1].'" target="mainFrame3"><img src="img/icono_borrar.gif" width="15" height="17" /></a></td><td><strong>'.$linea[1].'</strong>');
								
								$consultaCONT = "SELECT Count(*) AS TotalF FROM frases WHERE tipo='".$linea[1]."';";
								$resultCONT = mysql_db_query($dbase, $consultaCONT);
								$tempTOTAL = mysql_fetch_row($resultCONT);
								
								print('<font size="-1"> ('.$tempTOTAL[0].')</font></td> </tr>');}
							break;
							
					case 1: print(' <img src="img/etiquetas.png" width="20" height="20" /> <strong><em><font size="6">BORRAR ETIQUETA</font></em></strong></p><table border="0" align="center">');
							$consulta = "SELECT * FROM ".$etiquetas." ORDER BY etiqueta ".$dire.";";
							$result = mysql_db_query($dbase, $consulta);
						
							while($linea = mysql_fetch_row($result)){
								
								$consulta2 = "SELECT * FROM ".$relacion." WHERE idetiqueta=".$linea[0].";";
								$result2 = mysql_db_query($dbase, $consulta2);
								$linea2 = mysql_fetch_row($result2);
								if(!$linea2){
									print('<tr><td ><a href="del_tag.php?ide='.$linea[0].'" target="mainFrame3"><img src="img/icono_borrar.gif" width="15" height="17" /></a></td><td><strong>'.$linea[1].'</strong></td> </tr>');
								}else{
									print('<tr><td ></td><td><strong>'.$linea[1].'</strong></td> </tr>');
								}
							}
							break;
				
				}
				mysql_close($ident);
	}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n";
			
	}
print(' </table>');
?>
</body>

</html>
