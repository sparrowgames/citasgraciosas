<?php
print('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>');

function Redirect($ToURL){
      echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN"> <html><head><meta http-equiv="Content-Type" content
="text/html; charset=iso-8859-1"> <meta http-equiv="refresh" content="1; url
=' . $ToURL . '">';
//<title>Redirigiendo...</title></head><body><div align
//="center"> <B>Redirigiendo,</B><br><B> espera un momento...</B> </div></body></html>';
      exit;
}

$iden=$_REQUEST["ide"];
	if(!$iden){
		print('<p align="center" class="Estilo2">SE HA PRODUCIDO UN ERROR </p>');
		Redirect('http://www.citasgraciosas.com');
	}else{
		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden.";";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);
		
/*		if(strlen($linea[2])>130){
			$tempstring = substr($linea[2], 0, 127);
			$tempstring = $tempstring."...";
		}else{*/
			//$tempstring = $linea[2];
//		}
/*		$pos = strpos($linea[2], ' ');
		$tempstring = substr($linea[2], ($pos+1));
		$pos2 = strpos($tempstring, ' ');
		$stringfinal = substr($linea[2], 0,(($pos2+$pos)+1));
		$stringfinal = $stringfinal.'...';*/
		
		print('<meta property="og:type" content="article"/>');
//		print('<meta property="og:title" content="'.$stringfinal.'" />');
		print('<meta property="og:title" content="citasgraciosas.com" />');
		print('<meta property="og:description" content="'.$linea[2].'" />');
		print('<meta property="og:image" content="http://www.citasgraciosas.com/images/edi.jpg" />');
		//print('<meta property="og:url" content="http://www.citasgraciosas.com/"/>');
		
	}


//print('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />');




/*<style type="text/css">
<!--
body {
	background-image: url(images/bg.gif);
}
-->
</style>*/
print('<TITLE>citasgraciosas.com ..::.. Recopilaci&oacute;n de Citas y Frases Graciosas</TITLE>');
print('</head>

<body onload="">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="center"><img src="images/loading.gif" width="94" height="56" /></p>
</body>
</html>');

Redirect('http://www.citasgraciosas.com/mostrarfrase.php?ide='.$linea[0]);

?>