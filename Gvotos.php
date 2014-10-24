<?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/template_css.css" rel="stylesheet" type="text/css" />
<title>&iexcl;GRACIAS POR VOTAR!</title>
<style type="text/css">
<!--
.Estilo5 {
	color: #FFFFFF;
	font-weight: bold;
}
.Estilo11 {
	color: #FF9900;
	font-weight: bold;
	font-size: 12px;
}
.Estilo12 {
	color:#666666;
	font-weight: bold;
	font-size: 12px;
}
.Estilo13 {
	color: #993300;
	font-weight: bold;
	font-size: 12px;
}
body {
	background-image: url(images/bg.gif);
}
-->
</style>
</head>

<body>
</script>
<?php
		  	include('dbfechas.php');
		
		$sesi=$HTTP_GET_VARS["id"];
  		$ide=$HTTP_GET_VARS["ide"];
		$pag=$HTTP_GET_VARS["pag"];
		$categoria=$HTTP_GET_VARS["cat"];
		$orden=$HTTP_GET_VARS["ord"];
		$filas=$HTTP_GET_VARS["filas"];
		$busqueda=$HTTP_GET_VARS["string"];
					
		$item=$HTTP_GET_VARS['ide'];
		$itemsVotados=$_SESSION['itemsVotados'];

		if ($itemsVotados[$item]!=2){
			$itemsVotados[$item]=2;
			$_SESSION['itemsVotados']=$itemsVotados;
			include 'dbdata.php';
			$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
			$consulta =  "SELECT * FROM frases WHERE id='".$ide."'";
			$result = mysql_db_query($dbase, $consulta);
			$linea = mysql_fetch_row($result);
			$tpv=$HTTP_GET_VARS["tp"];
			$vota = $linea[1];
			
			switch($tpv){
			
				case 1:
					if($vota > 0){
						$vota = $vota - 1;
					}else{
						print('<font color="#FF0000"><strong>Esta frase no puede degradarse mas...</strong></font>');
		            }
					break;
				
				case 2:
						$vota = $vota + 1;
					break;

			}
			
			$consulta = "UPDATE frases SET votos=".$vota." WHERE id='".$ide."'";
			$result = mysql_db_query($dbase, $consulta);
		
		}else{
		
			print('<p align="center"><font color="#FF0000"><strong>&iexcl;&iexcl;YA HAS VOTADO ESTA FRASE!!!</strong></font></p>');
		}


	$iden = $item;
	
	if(!$iden){
		print('<br><p align="center" class="Estilo2">SE HA PRODUCIDO UN ERROR </p>');
	}else{
		include 'dbdata.php';
		$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);
		$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden.";";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);
		
		$cRAN = "SELECT * FROM ".$frase." ORDER BY votos DESC,fecha DESC;";
		$resRAN = mysql_db_query($dbase, $cRAN);
		$rankingG=0;
		do{
			$lR = mysql_fetch_row($resRAN);
			$rankingG++;
		}while($lR[0] != $linea[0]);
		
		$cRAN2 = "SELECT * FROM ".$frase." WHERE tipo='".$linea[4]."' ORDER BY votos DESC, fecha DESC;";
		$resRAN2 = mysql_db_query($dbase, $cRAN2);
		$ranking=0;
		do{
			$lR2 = mysql_fetch_row($resRAN2);
			$ranking++;
		}while($lR2[0] != $linea[0]);
		print('
		<table width="95%" border="0">
  <tr>
    <td><table width="95%" border="0">
      <tr>
        <td><div align="left">');
		
		print('<strong>Fecha de inserci&oacute;n: </strong><font>'.cambiaf_a_normal($linea[3]).'</font>');


		print('
		</div></td>
        <td><div align="left">');
		
		print("<strong>Votos: </strong>".$linea[1]);
		print('
		</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><hr><table width="100%" border="0">
  <tr>
    <td align="left"><strong>Frase:</strong></td>
  </tr>
  <tr>
    <td align="left">');
	print('<font size="2">');
	print($linea[2]);
	print('<font>');
	print('</td>
  </tr>
</table><hr>
	</td>
  </tr>
  <tr>
    <td>');
	
		print('<p align="center"><strong>Categor&iacute;a: </strong>'.$linea[4].'</p>');

	print('</td>
  </tr>
  <tr>
    <td>');
	
	print('<p align="center"><strong>Autor: </strong>'.$linea[5]).'</p>';
	print('</td>
  </tr><tr>
    <td><table width="95%" border="0">
  <tr>
    <td width="60%" align="left"><strong>Ranking en su categoria: </strong>');
	
	switch($ranking){
		case 1:	print('<span class="Estilo11">'.$ranking.'</span>');
				break;
		case 2:	print('<span class="Estilo12">'.$ranking.'</span>');
				break;
		case 3:	print('<span class="Estilo13">'.$ranking.'</span>');
				break;
		default: print($ranking);
	}
	print('</td>
    <td width="40%" align="right"><strong>Ranking global: </strong>');
	switch($rankingG){
		case 1:	print('<span class="Estilo11">'.$rankingG.'</span>');
				break;
		case 2:	print('<span class="Estilo12">'.$rankingG.'</span>');
				break;
		case 3:	print('<span class="Estilo13">'.$rankingG.'</span>');
				break;
		default: print($rankingG);
	}
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
</p>
<p align="center"><a href="javascript:close()">Cerrar Ventana </a><br /><a href="javascript:close()"><img src="images/cerrar.gif" width="21" height="21" border="0" /></a></p>
</body>
</html>
