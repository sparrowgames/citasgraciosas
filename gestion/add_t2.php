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
<title>FRASES - Se ha insertado un nuevo tipo</title>
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1">
<meta http-equiv="" content="text/html; charset=iso-8859-1"></head>

<body>
<div align="center"> 
  <?php	
  				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
 if($_REQUEST[txt1]){
		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = 
		"INSERT INTO ".$tipo."
		(`id`,`tipo`)
		VALUES
		('','".$_REQUEST[txt1]."');";
		$result= mysql_db_query($dbase,$consulta);
		$consulta = 
		"INSERT INTO ".$etiquetas."
		(`idetiqueta`,`etiqueta`)
		VALUES
		('','".$_REQUEST[txt1]."');";
		$result= mysql_db_query($dbase,$consulta);
		if(!$result){print('<p><font color="#FF0000" size="7">&iexcl;&iexcl;HA OCURRIDO UN ERROR!!</font></p>');}
		else{print('<p><font color="#006600" size="7">&iexcl;&iexcl;SE HA INSERTADO UNA NUEVA CATEGORIA!!</font></p>');}
		mysql_close($ident);
}else{print('<p><font color="#FF0000" size="7">&iexcl;&iexcl;INTRODUCE UN TIPO!!</font></p>');}

  print('<form name="form2" action="add_t.php">
    <hr>
    <input type="submit" name="Submit2" value="< Volver">
  </form>');
 }else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n";}
 ?>
</div>
</body>
</html>
