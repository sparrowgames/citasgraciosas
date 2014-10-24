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
<title>FRASES - Resultado de la b&uacute;squeda</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<p align="center"><strong><em><font size="6">RESULTADOS DE LA B&Uacute;SQUEDA</font></em></strong></p>
<div align="center">
  <?php 
				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
				if($_REQUEST[radiobutton]=="id" || $_REQUEST[radiobutton]=="votos"){
					$exacta=true;
				}else{
					$exacta=false;
				}

				if(is_numeric($_REQUEST[txt])){
					$len=5;
				}else{
					$len=strlen($_REQUEST[txt]);
				}
				
if($len>=3){
				
		if($_REQUEST[txt]!="" && $_REQUEST[radiobutton]!=""){
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				if($exacta){
					$consulta = "SELECT Count(id) AS TotalF FROM ".$frase." WHERE ".$_REQUEST[radiobutton]."='".$_REQUEST[txt]."' ORDER BY votos DESC;";
				}else{
					$consulta = "SELECT Count(id) AS TotalF FROM ".$frase." WHERE ".$_REQUEST[radiobutton]." LIKE '%".$_REQUEST[txt]."%' ORDER BY votos DESC;";
				}
				$resultTOT = mysql_db_query($dbase, $consulta);
				$lineaTOT = mysql_fetch_row($resultTOT);
				if($_REQUEST[radiobutton]=="tipo"){
					$auxi="categoria";
				}else{$auxi=$_REQUEST[radiobutton];}
				print('<font >');
				
				if($exacta){
					echo 'Busqueda por ';
					
					if($_REQUEST[radiobutton]=="votos") echo 'número de ';

					print($_REQUEST[radiobutton].': '.$_REQUEST[txt].'</strong>');
					
					if($_REQUEST[radiobutton]=="votos") echo '. Se han encontrado '.$lineaTOT[0].' coincidencias.</font>';
					$consulta = "SELECT * FROM ".$frase." WHERE ".$_REQUEST[radiobutton]."='".$_REQUEST[txt]."' ORDER BY votos DESC, fecha DESC;";
				}else{
					echo 'Buscar: <strong>'.$_REQUEST[txt].'</strong> en el campo: <strong>'.$auxi.'</strong>. Se han encontrado '.$lineaTOT[0].' coincidencias.</font>';
					$consulta = "SELECT * FROM ".$frase." WHERE ".$_REQUEST[radiobutton]." LIKE '%".$_REQUEST[txt]."%' ORDER BY votos DESC, fecha DESC;";}

				$result = mysql_db_query($dbase, $consulta);
				$linea = mysql_fetch_row($result);
				
				$consultaOPT = "SELECT * FROM frases_tipos ORDER BY tipo ASC";
				$resultOPT = mysql_db_query($dbase, $consultaOPT);
				$conta=0;
				while($lineaOPT = mysql_fetch_row($resultOPT)){
					$tipos[$conta]=$lineaOPT[1];
					$conta++;
				}
				
				if(!$linea[0]){print('<hr><br><img src="img/no.gif" /><hr>');}
				else{
				print('<form name="form" method="post" action="modifica2.php">');
	
					print('<table width="100%" border="0" ><tr><td></td><td><font color="#FF0000"><strong>ID</strong></font></td><td><strong><font color="#FF0000">FRASE</font></strong></td><td><strong><font color="#FF0000">CATEGORÍA</strong></font></td><td><strong><font color="#FF0000">AUTOR</strong></font></td><td><strong><font color="#FF0000"></strong></font></td></tr>');
					print('<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr><td><a href="tags.php?ide='.$linea[0].'" ><img src="img/etiquetas.png" width="20" height="20" /></a></td><td><p align="center"><input name="ides" type="text" value="'.$linea[0].'" size="4" maxlength="10"  readonly="true"></p></td><td> <textarea name="txt" cols="67" rows="2">'.$linea[2].'</textarea></td><td>');
					print("<select name='tp'><option selected>".$linea[4]."</option>");
					for($x=0;$x<count($tipos);$x++){				
 						if($tipos[$x] != $linea[4]){
							print('<option>'.$tipos[$x].'</option>');
						}
					}
					print('</select>');
 				print('</td><td><input name="txtAUT" type="text" value="'.$linea[5].'" /></td><td><p align="center"><input type="submit" name="Submit" value="Modificar"></form></p></td></tr>');
				while($linea = mysql_fetch_row($result)){
					print('<form name="form" method="post" action="modifica2.php">');
	
					print('<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr><tr><td><a href="tags.php?ide='.$linea[0].'" ><img src="img/etiquetas.png" width="20" height="20" /></a></td><td><p align="center"><input name="ides" type="text" value="'.$linea[0].'" size="4" maxlength="10"  readonly="true"></p></td><td> <textarea name="txt" cols="67" rows="2">'.$linea[2].'</textarea></td><td>');
					print("<select name='tp'><option selected>".$linea[4]."</option>");
					for($x=0;$x<count($tipos);$x++){				
 						if($tipos[$x] != $linea[4]){
							print('<option>'.$tipos[$x].'</option>');
						}
					}
					print('</select>');
 				print('</td><td><input name="txtAUT" type="text" value="'.$linea[5].'" /></td><td><p align="center"><input type="submit" name="Submit" value="Modificar"></form></p></td></tr>');
				}}
				mysql_close($ident);
		}else{
				print('<hr><p align="center" ><font ><strong>Algo ha fallado...</strong></font><img src="img/no.gif" /></p><hr>');}
	}else{
	echo '<br><img src="img/no.gif" /><br><p align="center"></p>';
/*	echo "<script>parent.document.location.href='menu.php';</script>\n";*/

}

}else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n";
}

  ?>
  
  </div>
</div>
</body>
</html>
