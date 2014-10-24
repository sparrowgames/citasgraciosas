<?php
	session_start();
	session_register('usuario');
			
	function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="3; url
=' . $ToURL . '">';
//<title>Redirigiendo...</title></head><body><div align
//="center"> <B>Redirigiendo,</B><br><B> espera un momento...</B> </div></body></html>';
      exit;
    }	

include 'dbdata.php';
$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
$userGET = $_REQUEST[textfield];
$passGET = crypt($_REQUEST[textfield2],$salt);
print('<br><br><br><br><div align="center">');
if(!$userGET){
		// campo vacio XD
		print('<img src="img/no.jpg" width="113" height="113" /><br><img src="img/no.gif" />');
				Redirect('index.php');
}else{
//		$consulta = "SELECT * FROM frases_admins WHERE user='".$_REQUEST[textfield]."' AND pass='".$pass."';";
		$consulta = "SELECT * FROM frases_admins WHERE user='".$userGET."';";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);
		$userBD = $linea[0];

		if(!$userBD){
			// NO EXISTE EL USUARIO
			print('<img src="img/no.jpg" width="113" height="113" /><br><img src="img/no.gif" /><br><p align="center"><font color="#FF0000" size="+7">&iexcl;&iexcl;No existe el usuario!!</font></p><br>');
			Redirect('index.php');		
		}else{
			// SI EXISTE
			$passBD = $linea[1];
			if($passBD == $passGET){
			 	$_SESSION['usuario']= $linea[0];
				
				print('<img src="img/si.jpg" width="113" height="113" /><br><font color="#009D00" size="+7"><p align="center">&iexcl;Te has identificado correctamente, '.$linea[0].'!</p></font><br>');
				//<p align="center" class="Estilo1"><a href="menu.php">Entrar </a>
				Redirect('menu.php');
			}else{

				print('<img src="img/no.jpg" width="113" height="113" /><br><img src="img/no.gif"/><br><p align="center"><font color="#FF0000" size="+7">&iexcl;&iexcl;Contraseña incorrecta!!</font></p><br>');
			Redirect('index.php');
			}
		}
}
mysql_close($ident);		
print('</div>');
?>
  </p>
</div>
</body>
</html>
