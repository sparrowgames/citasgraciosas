<?php
	session_start();
	
	$usuario = $_SESSION['usuario'];
	if(!$usuario){
		$usuario="Anonimo";
		$_SESSION['usuario']=$usuario;
	}
?>
<div align="center">
  <p>&nbsp;  </p>  
  <p>&nbsp;  </p>
  <p>&nbsp;  </p>   
  <p>&nbsp;  </p>
  <p>&nbsp;  </p>
  <p>&nbsp;  </p>
  <p>&nbsp;  </p>
  <p>&nbsp;  </p>
  <p>SE HA CAMBIADO LA FRASE DEL DIA</p>
  <p>&nbsp;  </p>
</div>
<?php
								function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="2; url
=' . $ToURL . '">';
//<title>Redirigiendo...</title></head><body><div align
//="center"> <B>Redirigiendo,</B><br><B> espera un momento...</B> </div></body></html>';
      exit;
}

								include '../dbdata.php';
								$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
							$consulta = "SELECT Count(*) AS TotalF FROM frases;";
							$result = mysql_db_query($dbase, $consulta);
							$tempTOTAL = mysql_fetch_row($result);
							$numero = rand(1,$tempTOTAL[0]);
							$consulta = "SELECT * FROM frases WHERE id=".$numero.";";
							$result = mysql_db_query($dbase, $consulta);
							$lineaN = mysql_fetch_row($result);
							$consultaFF = "UPDATE aux SET fecha='".date("Y-m-d")."', frase='".$lineaN[0]."' WHERE id='0';";
							mysql_db_query($dbase, $consultaFF);
							mysql_close($ident);
							Redirect('centro.php');
?>