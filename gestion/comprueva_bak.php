<?php
	session_start();
	session_register('usuario');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<div align="center">
  <p>&nbsp;  </p>
  <p>&nbsp;</p>
  <p>
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

		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "SELECT * FROM member WHERE user='".$_REQUEST[textfield]."' AND pass='".$_REQUEST[textfield2]."';";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);
		
		$usuario = $_REQUEST[textfield];
	
		if($linea[0]==$usuario and $usuario!=""){
			 	$_SESSION['usuario']=$usuario;
				print('<img src="img/si.jpg" width="113" height="113" /><br><font color="#009D00" size="+7"><p align="center">&iexcl;Te has identificado correctamente, '.$linea[0].'!</p></font><br>');
				//<p align="center" class="Estilo1"><a href="menu.php">Entrar </a>
				Redirect('menu.php');
			 
		}else{

			print('<img src="img/no.jpg" width="113" height="113" /><br>
			<p align="center"><font color="#FF0000" size="+7">&iexcl;&iexcl;Accceso denegado!!</font></p><br>');
			Redirect('index.php');
		}

?>
  </p>
</div>
</body>
</html>
