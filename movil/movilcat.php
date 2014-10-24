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
.Estilo2 {font-style: italic;}
.Estilo3 {color: #FFFFFF}
.Estilo5 {font-size: large}
body,td,th {
	font-size: 46px;
}

-->
</style>
</head>
<body><br />
<div align="center"><img src="images/titulomovil.png" width="333" height="60"/>
  <table width="90%" border="0">
    <tr>
      <td width="100%"><div align="center">
          <p><strong>
            <?php
	include('../dbfechas.php');
	include '../dbdata.php';
	
	$cat = $HTTP_GET_VARS["cat"];
	$pag = $HTTP_GET_VARS["pag"];
	
	if(!$pag){$pag=1;}

	if(!$cat){
		echo "<script>document.location.href='movil.php';</script>\n";
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
		print('<a href="movilcat.php?cat='.$cat.'&pag='.($pag-1).'"><img src="imgmanos/ant.png" width="65" height="65" /></a>');
	}else{
		print('<img src="imgmanos/antno.png" width="65" height="65" />');
	}
	
	print('</div></td>
    <td width="25%"><div align="center">');
	
	$consulta = "SELECT * FROM aux;";
	$result = mysql_db_query($dbase, $consulta);
	$lineaA = mysql_fetch_row($result);
	
	print('<a href="movil.php?ide='.$lineaA[2].'"><img src="imgmanos/cal.png" /></a>');

	print('</div></td><td width="25%"><div align="center">');
	//	$imagen= "imgmanos/".rand(1,9).".png";
		print('<a href="movil.php?ide='.$numero.'"><img src="imgmanos/random.png" /></a>');
	
	
	print('</div></td>');

	print('<td width="25%"><div align="right">');

	if(($pag+1) <= $tempTOTAL[0]){
		print('<a href="movilcat.php?cat='.$cat.'&pag='.($pag+1).'"><img src="imgmanos/sig.png" width="65" height="65" /></a>');
	}else{
		print('<img src="imgmanos/signo.png" width="65" height="65" />');
	}
	
	print('</div></td>
  </tr>
</table><br>');

//--------------------------------------------------------------------------------------------------------------
// Option de categorias ----------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------

print('<table width="100%" border="0" align="center">
  <tr>
    <td width="25%"><div align="left">
      	  <div align="center">
		   <label><select  onchange="window.location.href=this.value" style="font-size:32pt" >
		    <option value="">Selecciona una...</option>');

			$consultaCAT = "SELECT * FROM ".$tipo." ORDER BY tipo ASC";
			$resultCAT = mysql_db_query($dbase, $consultaCAT);

		while($lineaCAT = mysql_fetch_row($resultCAT)){
 					
			if($lineaCAT[1]!="prohibidas")
				if($lineaCAT[1] == $cat){
					print('<option selected="selected" value="movilcat.php?cat='.$lineaCAT[1].'">'.$lineaCAT[1].'</option>');
				}else{
						print('<option value="movilcat.php?cat='.$lineaCAT[1].'">'.$lineaCAT[1].'</option>');
				}
										
		}
					//}
			
				print('</select> '.$pag.' de '.$tempTOTAL[0].'</label>
	      </div>

      </div></td>
  </tr>
</table>');
//--------------------------------------------------------------------------------------------------------------

		print('<table border="0" align="center">
  <tr>
    <td><table border="0">
      <tr>
        ');
		

		print('
		      </td>
      </tr>
    </table></td>
  </tr>
  <tr>
<hr><table border="0">
  <tr>
    <td align="left"><strong>Frase:</strong></td>
  </tr>
  <tr>
    <td align="left">');

	print($linea[2]);

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
    <td width="45%" align="left" bordercolor="#FFFFFF"><font color="#555555"><strong>Votada</strong> '.$linea[6].' <strong>veces.</strong></font></td>
    <td width="45%"><div align="right" bordercolor="#FFFFFF"><a href="votos.php?ide='.$tempide.'&cat=movil2&tp=2&pag='.$pag.'&cc='.$cat.'"><img src="/images/up.gif" width="65" height="65" border="0" /></a><font color="#0000FF"><strong> (');
	
	if($linea[1]>=1){
		echo "+";
	}
	
	echo $linea[1];
	
	print(') </strong></font><a href="votos.php?ide='.$tempide.'&cat=movil2&tp=1&pag='.$pag.'&cc='.$cat.'"><img src="/images/dw.gif" width="65" height="65" border="0" /></a></div></td>
  </tr>
</table>');
					
					}else{
					
						print('<table width="90%" border="1" align="center" bordercolor="#555555">
  <tr bordercolor="#FFFFFF">
    <td width="45%" align="left" bordercolor="#FFFFFF"><font color="#555555"><strong>Votada</strong> '.$linea[6].' <strong>veces.</strong></font></td>
    <td width="45%"><div align="right" bordercolor="#FFFFFF"><font color="#0000FF"><strong> (');
	
	if($linea[1]>=1){
		echo "+";
	}
	
	echo $linea[1];
	
	print(') </strong></font><img src="/images/no.gif" width="65" height="65" border="0" /></div></td>
  </tr>
</table>'); 

					
					}
// BARRA + INFO ---------------------------------------------------------------------------------------------------	

print('<br><table width="100%" border="0" align="center">
  <tr>
    <td width="3%">');
	
	print('<a href="movilcatext.php?pag='.$pag.'&cat='.$cat.'">
	
	<img src="images/info.gif" width="65" height="65" alt="+ Info"/>');
	
	print('</td>
    <td width="97%"><hr /></td>
  </tr>
</table>');
		

// -----------------------------------------------------------------------------------------------------------------	
/*if($_SESSION['info']){
}//fin if info*/
// -----------------------------------------------------------------------------------------------------------------	

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
            <span class="Estilo5">citasgraciosas.com 2005-<?php echo date('Y') ?> <br />
                  Juanuxx y Alex. <br />
          Powered by: </span><span class="icons Estilo5"><a href="http://www.champinet.com/" target="_blank"><font color="#9900FF">CHAMPINET</font></a></span></strong></p>
        <table width="400" border="0" align="center">
            <tr>
              <td width="34%"><div align="left"><strong><span class="icons "><span class="Estilo11 Estilo11"><a href="http://webdesing.champinet.com/cgi-bin/awstats.pl?config=citasgraciosas" target="_blank"><img src="images/stat.gif" alt="Estadisticas" width="44" height="44" border="0" /></a></span></span></strong></div></td>
              <td width="21%"><div align="left"><strong><a href="http://www.citasgraciosas.com/"><img src="images/pc.png" alt="PC" width="40" height="40" border="0" /></a></strong></div></td>
              <td width="21%"><div align="right"><a href="http://www.facebook.com/citasgraciosasweb" target="_blank"><img src="images/f.png" alt="Feed RSS" width="40" height="40" border="0" /></a></div></td>
              <td width="24%"><div align="right"><a href="http://feed.citasgraciosas.com" target="_blank"><img src="images/rss.png" alt="Feed RSS" width="40" height="40" border="0" /></a></div></td>
            </tr>
          </table>
      </div></td>
    </tr>
  </table><div align="center"><br />
<script type="text/javascript"><!--
  // XHTML should not attempt to parse these strings, declare them CDATA.
  /* <![CDATA[ */
  window.googleAfmcRequest = {
    client: 'ca-mb-pub-1408828158666630',
    format: '320x50_mb',
    output: 'html',
    slotname: '4733863563',
  };
  /* ]]> */
//--></script>
<script type="text/javascript"    src="http://pagead2.googlesyndication.com/pagead/show_afmc_ads.js"></script>
  </div>
  </strong>
</div>
</body>
</html>
