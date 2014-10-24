<?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
	
	session_register('tiponavegador');
	$_SESSION['tiponavegador'] = false;
	

	session_register('ideS');
	session_register('ideA');
	session_register('pag');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>citasgraciosas.com</title>
<style type="text/css">
<!--
.Estilo2 {font-size: x-small;font-style: italic;}
.Estilo3 {color: #FFFFFF}
.Estilo4 {font-size: xx-small}

-->
</style>

</head>
<body>

<?php

	include('dbfechas.php');
	include 'dbdata.php';
	
	$cat = $HTTP_GET_VARS["cat"];
	$pag = $HTTP_GET_VARS["pag"];
	
	if(!$pag){$pag=1;}

	if(!$cat){
		echo "<script>document.location.href='Gcontent.php';</script>\n";
	}else{
	
	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);

	$consulta = "SELECT * FROM frases ORDER BY id DESC;";
	$result = mysql_db_query($dbase, $consulta);
	$MAX = mysql_fetch_row($result);
	$numero = rand(1,$MAX[0]);
	
	$consultaCONT = "SELECT Count(*) AS TotalF FROM frases WHERE tipo='".$cat."';";
	$resultCONT = mysql_db_query($dbase, $consultaCONT);
	$tempTOTAL = mysql_fetch_row($resultCONT);

		

		$consulta = "SELECT * FROM ".$frase." WHERE tipo='".$cat."' ORDER BY votos DESC, fecha DESC LIMIT ".($pag-1).",1;";
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

	$numero = rand(1,$MAX[0]);
	
	$tempide = $linea[0];

//--------------------------------------------------------------------------------------------------------------
// botones de navegación
//--------------------------------------------------------------------------------------------------------------

print('<table width="100%" border="0" align="center">
  <tr>
    <td width="25%"><div align="left">');
	
	if($pag > 1){
		print('<a href="Gcontentcat.php?cat='.$cat.'&pag='.($pag-1).'"><img src="imgmanos/ant.png" width="20" height="20" border="0" /></a>');
	}else{
		print('<img src="imgmanos/antno.png" width="20" height="20" />');
	}
	
	print('</div></td>
    <td width="25%"><div align="center">');
	
	$consulta = "SELECT * FROM aux;";
	$result = mysql_db_query($dbase, $consulta);
	$lineaA = mysql_fetch_row($result);
	
	print('<a href="Gcontent.php?ide='.$lineaA[2].'"><img src="imgmanos/cal.png" border="0" /></a>');

	print('</div></td><td width="25%"><div align="center">');
	//	$imagen= "imgmanos/".rand(1,9).".png";
		print('<a href="Gcontent.php?ide='.$numero.'"><img src="imgmanos/random.png" border="0" /></a>');
	
	
	print('</div></td>');

	print('<td width="25%"><div align="right">');

	if(($pag+1) <= $tempTOTAL[0]){
		print('<a href="Gcontentcat.php?cat='.$cat.'&pag='.($pag+1).'"><img src="imgmanos/sig.png" width="20" height="20" border="0" /></a>');
	}else{
		print('<img src="imgmanos/signo.png" width="20" height="20" />');
	}
	
	print('</div></td>
  </tr>
</table>');

		print('<table width="90%" border="0" align="center">
  <tr>
    <td><span class="Estilo4"><p align="center">'.$pag.' de '.$tempTOTAL[0].'</p></span>
	<table border="0">
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
</table>');

// Votaciones -------------------------------------------------	
					
					$itemsVotados=$_SESSION['itemsVotados'];
					$cita=$linea[0];
					
			
					if($itemsVotados[$cita]!=2){
					
					print('<br>
					<table width="90%" border="1" align="center" bordercolor="#555555">
  <tr bordercolor="#FFFFFF">
    <td width="45%" align="left" bordercolor="#FFFFFF"><font color="#555555"><strong>Votar</strong></font></td>
    <td width="45%"><div align="right" bordercolor="#FFFFFF"><a href="votos.php?ide='.$tempide.'&cat=Gcontent&tp=2&pag='.$pag.'&cc='.$cat.'"><img src="/images/up.gif" width="20" height="20" border="0" /></a><font color="#0000FF"><strong> ('.$linea[1].') </strong></font><a href="votos.php?ide='.$tempide.'&cat=Gcontent&tp=1&pag='.$pag.'&cc='.$cat.'"><img src="/images/dw.gif" width="20" height="20" border="0" /></a></div></td>
  </tr>
</table>');
					
					}else{
					
						print('<table width="90%" border="1" align="center" bordercolor="#555555">
  <tr bordercolor="#FFFFFF">
    <td width="45%" align="left" bordercolor="#FFFFFF"><font color="#555555"><strong>Votar</strong></font></td>
    <td width="45%"><div align="right" bordercolor="#FFFFFF"><font color="#0000FF"><strong> ('.$linea[1].') </strong></font><img src="/images/no.gif" width="20" height="20" border="0" /></div></td>
  </tr>
</table>'); 

					
					}
					
//--------------------------------------------------------------------------------------------------------------
// Option de categorias ----------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------

print('<br><table width="100%" border="0" align="center">
  <tr>
    <td width="25%"><div align="left">
      	  <div align="center">
		   <select  onchange="window.location.href=this.value" >
		    <option value="">Selecciona una...</option>');

			$consultaCAT = "SELECT * FROM ".$tipo." ORDER BY tipo ASC";
			$resultCAT = mysql_db_query($dbase, $consultaCAT);

		while($lineaCAT = mysql_fetch_row($resultCAT)){
 					
			if($lineaCAT[1]!="prohibidas")
				if($lineaCAT[1] == $cat){
					print('<option selected="selected" value="Gcontentcat.php?cat='.$lineaCAT[1].'">'.$lineaCAT[1].'</option>');
				}else{
						print('<option value="Gcontentcat.php?cat='.$lineaCAT[1].'">'.$lineaCAT[1].'</option>');
				}
										
		}
					//}
			
				print('</select>
	      </div>

      </div></td>
  </tr>
</table>');
//--------------------------------------------------------------------------------------------------------------

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
<div align="center"><strong><span class="Estilo4">citasgraciosas.com 2005-<?php echo date('Y') ?> <br /> Juanuxx y Alex. <br />
		          Powered by: </span><span class="icons Estilo4"><a href="http://www.champinet.com/" target="_blank"><font color="#9900FF">CHAMPINET</font></a></span><span class="icons "><span class="Estilo11 Estilo11"><br />
</div>

</body>
</html>
