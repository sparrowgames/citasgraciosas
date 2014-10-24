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
		$d=0;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>etiquetas</title>
<style type="text/css">

<!--
.link2c3 {
  /* Links para categorías y otros */
  
  font-family: Geneva, Arial, Helvetica, sans-serif;
  font-size: 12px;
  color: #555555;
  background-color:#CCCCFF;
  text-decoration: underline;
  border-radius: 10px;  
    -moz-border-radius: 10px;  
    -webkit-border-radius: 10px;
	  
}

a:hover.link2c3 {
  font-family: Geneva, Arial, Helvetica, sans-serif;
  color: #555555;
  font-size:12px;
  background-color:#FFFF66;
}

-->
</style>

</head>

<body>
<p align="center"><strong><em><font size="6">ASIGNACI&Oacute;N DE ETIQUETAS </font></em></strong></p>
<p>
  <?php

	include('dbfechas.php');
	include 'dbdata.php';

	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);

	$iden = $HTTP_GET_VARS["ide"];
	$d = $_SESSION['d'];
	
	if(!$iden){
		//print('<font color="#FF0000"><strong>SE HA PRODUCIDO UN ERROR...</strong></font>');
				if($d==0){
					$_SESSION['d'] = 1 - $d;
					echo "<script>document.location.href='tags.php?ide=1';</script>\n";
				}
				else{
					$consulta = "SELECT id FROM ".$frase." ORDER BY id DESC;";
					$result = mysql_db_query($dbase, $consulta);
					$linea = mysql_fetch_row($result);
					$_SESSION['d'] = 1 - $d;
					echo "<script>document.location.href='tags.php?ide=".$linea[0]."';</script>\n";
				}
			
	}else{
				echo '<p align="center"><a href="tags.php">';
				if($d==0){
					
					echo '<img src="imgmanos/top.png" width="20" height="20" />';
				}else{
					echo '<img src="imgmanos/down.png" width="20" height="20" />';

				}
				
				echo '</a> Id: '.$iden.'</p>';
				
				
				$img= rand(1,9);

		$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden.";";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);
		

		print('<table width="90%" border="0" align="center">
  <tr>
    <td><table width="90%" border="0">
      <tr>
        <td><div align="left">');
		

		print('
		</div></td>
        <td>'); 
		
		print('</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><hr><table border="0">
  <tr>
    <td align="left"><strong>');

		print('Frase:');

	
	print('
	</strong></td>
  </tr>
  <tr>
    <td align="left">');
//print('<font size="2">');
	print($linea[2]);
//	print('<font>');
	print('</td>
  </tr>
</table>');

print('<p align="center">');



print(' <a href="tags.php?ide='.($linea[0]-1).'"><img src="imgmanos/ant.png" width="20" height="20" /></a> <img src="img/acid.png" width="20" height="20" /> <a href="tags.php?ide='.($linea[0]+1).'"><img src="imgmanos/sig.png" width="20" height="20" /></a></p>');
					
				
// BARRA ETIQUETAS ---------------------------------------------------------------------------------------------------	
print('<br><hr>');

print('<table width="100%" border="0" align="center">
  <tr>
    <td width="25%"><div align="left">
      	  <div align="center">
		   <select  onchange="window.location.href=this.value" >
		    <option value="">Selecciona una...</option>');

			$consultaCAT = "SELECT * FROM ".$etiquetas." ORDER BY etiqueta ASC";
			$resultCAT = mysql_db_query($dbase, $consultaCAT);

		while($lineaCAT = mysql_fetch_row($resultCAT)){
 					
	
				print('<option value="tag_add.php?ide='.$linea[0].'&t='.$lineaCAT[0].'">'.$lineaCAT[1].'</option>');
										
		}

			
				print('</select>
	      </div>

      </div></td>
  </tr>
</table>');

	$identnube = mysql_connect($dbhost,$dbuser,$dbpasswd);
	$consultanube = "select * from ".$etiquetas." ORDER BY etiqueta ASC;";
	$resultnube = mysql_db_query($dbase, $consultanube);
	
	while($lineanube = mysql_fetch_row($resultnube)){
			
		print('<a href="tag_add?ide='.$linea[0].'&t='.$lineanube[0].'" class="link2c3">'.$lineanube[1].' </a>');
	}


print('<br><p align="center">
<table width="100%" border="0" align="center">
  <tr>
    <td width="10%">');
	
	print('<img src="img/etiquetas.png" width="20" height="20" /> Etiquetas:');
	
	print('</td>
    <td width="90%"><hr /></td>
  </tr>
</table><br>');

// --------------------------------------------------------------------------------------------------------------------------------
// AQUI VA TOL MATUTE -------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------------

	$consulta2 = "SELECT * FROM ".$relacion." WHERE idfrase=".$linea[0].";";
	$result2 = mysql_db_query($dbase, $consulta2);

	while($linea2 = mysql_fetch_row($result2)){
		$consulta3 = "select * from ".$etiquetas." where idetiqueta=".$linea2[2].";";
		$result3 = mysql_db_query($dbase, $consulta3);
		$linea3 = mysql_fetch_row($result3);
		
			$salida[$linea3[1]] = ' #<a href="tag_del.php?ide='.$linea[0].'&t='.$linea2[2].'">'.$linea3[1].'</a> ';
	}
	ksort($salida);
	foreach ($salida as $value) {
		echo $value;
	}

// --------------------------------------------------------------------------------------------------------------------------------
	print('</td>
  </tr>
  
</table>');
	print('
	</td>
  </tr>
</table>');
	}
	

mysql_close($ident);

?>
 </div>
</body>
</html>
