<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style>

</head>

<body>
<?php
  		function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="1; url
=' . $ToURL . '">';
//<title>Redirigiendo...</title></head><body><div align
//="center"> <B>Redirigiendo,</B><br><B> espera un momento...</B> </div></body></html>';
      exit;
}	
				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
				print('<div align="center"> ');
 
  				
				$filas=$HTTP_GET_VARS['fil'];
				if(!$filas){
					$filas=$HTTP_GET_VARS["filas"];}
				if(!$filas){$filas=30;}
				
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$consulta = "SELECT Count(*) AS TotalF FROM ".$frase.";";
				$result = mysql_db_query($dbase, $consulta);
				$linea = mysql_fetch_row($result);
				
				
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				
				$PAGtotal=ceil($linea[0]/$filas);
				$pag=$HTTP_GET_VARS["pag"];			
				if(!$pag){$pag=1;}
				if($pag>1){$pagANT=$pag-1;}
				else{$pagANT=$pag;}
				if($pag<$PAGtotal){$pagSIG=$pag+1;}
				else{$pagSIG=$pag;}
				
				print('<table width="80%" border="0" align="center"><tr><td><div align="center">');
				
				for($x=1;$x<=$PAGtotal;$x++){
					if($x!=$pag){
							print('<font size="1" color="#0099FF"> -<a href="gestion_contenido.php?pag='.$x.'&filas='.$filas.'"><font size="2" >'.$x.'</font></a>- </font>');
							
					}else{
							print('<font size="1" color="#555555"> -<font size="2" color="#FF0000">'.$x.'</font>- </font>');
					}
					if($xx > 30){ 
						print('<br>');
						$xx=0;
					}
					$xx++;
					}
				print('</div></td></tr></table>');
				print('<p></p>');
				
				$consulta = "SELECT * FROM ".$frase." ORDER BY ID DESC LIMIT ".(($pag-1)*$filas).",".$filas.";";
				$result = mysql_db_query($dbase, $consulta);
				print('<table width="100%" border="0"><tr><td></td><td><font color="#FF0000"><strong>ID</strong></font></td><td><strong><font color="#FF0000">FRASE</font></strong></td><td><strong><font color="#FF0000">CATEGOR&Iacute;A</strong></font></td><td><strong><font color="#FF0000">AUTOR</strong></font></td><td><strong><font color="#FF0000"></strong></font></td><td></td></tr>');
			
				$consultaOPT = "SELECT * FROM frases_tipos ORDER BY tipo DESC";
				$resultOPT = mysql_db_query($dbase, $consultaOPT);
				$conta=0;
				while($lineaOPT = mysql_fetch_row($resultOPT)){
					$tipos[$conta]=$lineaOPT[1];
					$conta++;
				}

echo "<script>parent.topFrame2.location.href='gestion_top.php?pag=".$pag."&filas=".$filas."';</script>\n";
while($linea = mysql_fetch_row($result)){
				print('<form name="form" method="post" action="modifica2.php" >');

				print('<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr>
					  <td>');
				
				print('<a href="tags.php?ide='.$linea[0].'" ><img src="img/etiquetas.png" width="20" height="20" /></a></td><td><p align="center"><input name="ides" type="text" value="'.$linea[0].'" size="4" maxlength="10"  readonly="true"></p></td><td> <textarea name="txt" cols="66" rows="2">'.$linea[2].'</textarea></td><td>');
//----------------------------------------------------------
				print("<select name='tp'><option selected>".$linea[4]."</option>");

				for($x=0;$x<count($tipos);$x++){				
 					if($tipos[$x] != $linea[4]){
						print('<option>'.$tipos[$x].'</option>');
					}
				}
				print('</select>');
//----------------------------------------------------------					

 			print('</td><td><input name="txtAUT" type="text" value="'.$linea[5].'" /></td><td><p align="center"><input type="submit" name="Submit" value="Modificar"></form></p></td></tr>');
}
					print('</table>');
				mysql_close($ident);
				

				
}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
Redirect('index.php');}
		?>
</body>
</html>
