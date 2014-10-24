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
		$id = $HTTP_GET_VARS['id'];
 		$cat = $HTTP_GET_VARS['cat'];

		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "SELECT * FROM ".$frase." WHERE tipo='".$cat."';";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);

		if(!$linea){
			$consultaDEL = "DELETE FROM ".$tipo." WHERE id=".$id.";";
			$result= mysql_db_query($dbase,$consultaDEL);
			if(!result){
				print('<br><br><div align="center"><font color="#FF0000"><strong>...HA OCURRIDO UN ERROR...</strong></font>');
			}else{
				print('<img src="img/si.jpg" alt="ok">');
				echo "<script>parent.leftFrame3.document.location.href='del_izq.php?t=0';</script>\n";
				echo "<script>parent.mainFrame3.document.location.href='del_der.php?t=0';</script>\n";
			}
		}else{
			echo '<strong><font size="5" color="#00000">¡No se puede borrar porque hay frases!</strong><br>.';
			echo '<strong><font size="-1" color="#FF0000">Cambia estas frases de categoria para poder borrarla...</font><br><br>';
	
			do{
			print('<table width="100%" border="0"><tr><td><strong><font color="#555555">FRASE</font></strong></td><td><strong><font color="#555555">CATEGOR&Iacute;A</strong></font></td><td></td></tr>');
			
				$consultaOPT = "SELECT * FROM frases_tipos ORDER BY tipo DESC";
				$resultOPT = mysql_db_query($dbase, $consultaOPT);
				$conta=0;
				while($lineaOPT = mysql_fetch_row($resultOPT)){
					$tipos[$conta]=$lineaOPT[1];
					$conta++;
				}
//while($linea = mysql_fetch_row($result)){
				print('<form name="form" method="post" action="del_modifica.php?id='.$linea[0].'&cat='.$cat.'" >');

				print('<tr><td><hr></td><td><hr></td></tr><tr>
					  ');
				
				print('<td>'.$linea[2].'</td><td>');
//----------------------------------------------------------
				print("<select name='tp'><option selected>".$linea[4]."</option>");

				for($x=0;$x<count($tipos);$x++){				
 					if($tipos[$x] != $linea[4]){
						print('<option>'.$tipos[$x].'</option>');
					}
				}
				print('</select>');
//----------------------------------------------------------					

 				print('</td><td><p align="center"><input type="submit" name="Submit" value="Modificar"></form></p></td></tr>');

					print('</table>');

			}while($linea = mysql_fetch_row($result));	
		}
		mysql_close($ident);
/*echo "<script>parent.leftFrame3.document.location.href='del_izq.php?t=1';</script>\n";
echo "<script>parent.mainFrame3.document.location.href='del_der.php';</script>\n";*/

 
}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n"; }
 ?>
</div>
</body>
</html>
