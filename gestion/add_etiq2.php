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
  
  		function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="3; url
=' . $ToURL . '">';
//<title>Redirigiendo...</title></head><body><div align
//="center"> <B>Redirigiendo,</B><br><B> espera un momento...</B> </div></body></html>';
      exit;
}	
  				$usuario = $_SESSION['usuario'];
				if($usuario!="Anonimo"){
				
 if($_REQUEST[txt1]){
		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = 
		"INSERT INTO ".$etiquetas."
		(`idetiqueta`,`etiqueta`)
		VALUES
		('','".$_REQUEST[txt1]."');";
		$result= mysql_db_query($dbase,$consulta);
		if(!$result){print('<p><font color="#FF0000" size="7">&iexcl;&iexcl;HA OCURRIDO UN ERROR!!</font></p>');}
		else{print('<p><font color="#006600" size="7">&iexcl;&iexcl;SE HA INSERTADO UNA ETIQUETA !!</font></p>');}
		mysql_close($ident);
}else{print('<p><font color="#FF0000" size="7">&iexcl;&iexcl;INTRODUCE UNA ETIQUETA!!</font></p>');}

  print('
    <hr>
    Redirigiendo en 3 segundos, espera...
');
 }else{
print('<br><br><div align="center"><font color="#FF0000"><strong>...ACCESO RESTRINGIDO...</strong></font>');
echo "<script>document.location.href='index.php';</script>\n";}
Redirect("add_etiq.php");
 ?>
</div>
</body>
</html>
