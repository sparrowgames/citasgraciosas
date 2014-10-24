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
<title>FRASES - Modificar Categoria</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"><meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<p align="center"><strong><em><font size="6">Modificar Categoria </font></em></strong></p>
<p align="center">&nbsp;</p>
<div align="center">
  <?php
$usuario = $_SESSION['usuario'];
if($usuario!="Anonimo"){
print('<br><p align="center"><strong>Paso 1 </strong></p>
<p align="center">Selecciona la categoria que deseas renombrar: </p>
<form action="modifica_tipo2.php">');
				include 'dbdata.php';
				$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
				$consulta = "SELECT * FROM ".$tipo." ORDER BY tipo ASC";
				$result = mysql_db_query($dbase, $consulta);
  			print("<select name='tp'>");
				print('<option selected>Elije categoria...</option>');
				while($linea = mysql_fetch_row($result))
 					
					//if($linea[1]=="Variadas"){
						
					//}else{
					
						print('<option>'.$linea[1].'</option>');
					//}
			
				print('</select>');
				
				mysql_close($ident);
			print('	<p align="center"><strong>Paso 2 </strong></p>
<p align="center">Escribe el nuevo nombre para la categoria : </p>


<div align="center">
 
    <p>
      <input type="text" name="textfield">
    </p>
    <p>
      <input type="submit" name="Submit" value="Modificar">
</p>

<form>');
}
 ?>
</div>
</body>
</html>
