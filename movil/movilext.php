<?php
	session_start();
	session_register('itemsVotados');
	session_register('itemsEncuesta');
	
	session_register('tiponavegador');
	//$_SESSION['tiponavegador'] = false;
	
//	session_register('ide');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>citasgraciosas.com</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 46px;
}
.Estilo5 {font-size: large}

-->
</style>

</head>
<body>
<br />
<div align="center">
  <img src="images/titulomovil.png" width="333" height="60"/>
  <table width="90%" border="0">
    <tr>
      <td width="83%"><div align="center">
        <p><strong><span class="Estilo4">
            <?php

	include('../dbfechas.php');
	include '../dbdata.php';

	$ident = mysql_connect($dbhost,$dbuser,$dbpasswd);

	$consulta = "SELECT * FROM frases ORDER BY id DESC;";
	$result = mysql_db_query($dbase, $consulta);
	$MAX = mysql_fetch_row($result);
	$numero = rand(1,$MAX[0]);
	
	$iden = $HTTP_GET_VARS["ide"];
	if(!$iden){
//		$iden = rand(1,$MAX[0]);
		$consulta = "SELECT * FROM aux;";
		$result = mysql_db_query($dbase, $consulta);
		$lineaA = mysql_fetch_row($result);
		$iden = $lineaA[2];

	}
	if(!$iden){
		print('<font color="#FF0000"><strong>SE HA PRODUCIDO UN ERROR...</strong></font>');
	}else{
		

		$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden.";";
		$result = mysql_db_query($dbase, $consulta);
		$linea = mysql_fetch_row($result);

	/*	$lineaSIG = mysql_fetch_row($result);
		
		$consulta = "SELECT * FROM ".$frase." WHERE id=".$iden." ORDER BY id DESC;";
		$result = mysql_db_query($dbase, $consulta);
		$lineaANT = mysql_fetch_row($result);
		$lineaANT = mysql_fetch_row($result);*/
		
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
// botones de navegación

print('<table width="100%" border="0" align="center">
  <tr>
    <td width="25%"><div align="left">');
	
	if(($tempide-1) >= 1){
		print('<a href="movil.php?ide='.($tempide-1).'"><img src="imgmanos/ant.png" /></a>');
	}else{
		print('<img src="imgmanos/antno.png" />');
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
	
	
	if(($tempide +1) <= $MAX[0]){
		print('<a href="movil.php?ide='.($tempide+1).'"><img src="imgmanos/sig.png" /></a>');
	}else{
		print('<img src="imgmanos/signo.png" />');
	}
	
	print('</div></td>
  </tr>
</table><br>');

//--------------------------------------------------------------------------------------------------------------
// Option de categorias ----------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------

print('<table border="0" align="center">
  <tr>
    <td width="25%"><div align="left">
      	  <div align="center">
		   <select  onchange="window.location.href=this.value" style="font-size:32pt">
		    <option value="">Selecciona una...</option>');

			$consultaCAT = "SELECT * FROM ".$tipo." ORDER BY tipo ASC";
			$resultCAT = mysql_db_query($dbase, $consultaCAT);

		while($lineaCAT = mysql_fetch_row($resultCAT)){
 					
			if($lineaCAT[1]!="prohibidas")
				print('<option value="movilcat.php?cat='.$lineaCAT[1].'">'.$lineaCAT[1].'</option>');
										
		}
					//}
			
				print('</select>
	      </div>

      </div></td>
  </tr>
</table>');

//--------------------------------------------------------------------------------------------------------------

		print('<table width="100%" border="0" align="center">
  <tr>
    <td><table width="90%" border="0">
      <tr>
        <td><div align="left">');
		

		print('
		</div></td>
        <td>'); 
		
		print('</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><hr><table border="0">
  <tr>
    <td align="left"><strong>');
	if($linea[0]==$lineaA[2]){
		print('Frase del dia:');
	}else{
		print('Frase:');
	}
	
	print('
	</strong></td>
  </tr>
  <tr>
    <td align="left">');
//	print('<font size="2">');
	print($linea[2]);
//	print('<font>');
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
    <td width="45%"><div align="right" bordercolor="#FFFFFF"><a href="votos.php?ide='.$linea[0].'&cat=movil&tp=2"><img src="/images/up.gif" width="65" height="65" border="0" /></a><font color="#0000FF"><strong> (');
	
	if($linea[1]>=1){
		echo "+";
	}
	
	echo $linea[1];
	
	print(') </strong></font><a href="votos.php?ide='.$linea[0].'&cat=movil&tp=1"><img src="/images/dw.gif" width="65" height="65" border="0" /></a></div></td>
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
	
	print(') </strong></font><img src="/images/no.gif" border="0" /></div></td>
  </tr>
</table>'); 

					
					}
// BARRA + INFO ---------------------------------------------------------------------------------------------------	

print('<br><table width="100%" border="0" align="center">
  <tr>
    <td width="6%">');
	
	print('<a href="movil.php?ide='.$linea[0].'"><img src="images/info.gif" width="64" height="64" alt="+ Info"/>');
	
	print('</td>
    <td width="94%"><hr /></td>
  </tr>
</table>');
		

// -----------------------------------------------------------------------------------------------------------------	
/*if($_SESSION['info']){
}//fin if info*/
// -----------------------------------------------------------------------------------------------------------------	
		
print('</td>
  </tr>
  <tr>
    <td align="center">');
		print('<strong>Inserci&oacute;n: </strong>'.cambiaf_a_normal($linea[3]));
		print("<p><strong>Categor&iacute;a: </strong>".$linea[4]."</p>");

	print('</td>
  </tr>
  <tr>
    <td align="center">');
	
	print("<strong>Autor: </strong>".$linea[5]);
	print('</td>
  </tr><tr>
    <td><br><table width="100%" border="0">
  <tr>
    <td align="center"> <strong>Ranking: </strong>');
	
	switch($ranking){
		case 1:	print('<span class="Estilo11">'.$ranking.'</span>');
				break;
		case 2:	print('<span class="Estilo12">'.$ranking.'</span>');
				break;
		case 3:	print('<span class="Estilo13">'.$ranking.'</span>');
				break;
		default: print($ranking);
	}
	print('<br><strong>Ranking global: </strong>');
	switch($rankingG){
		case 1:	print('<span class="Estilo11">'.$rankingG.'</span>');
				break;
		case 2:	print('<span class="Estilo12">'.$rankingG.'</span>');
				break;
		case 3:	print('<span class="Estilo13">'.$rankingG.'</span>');
				break;
		default: print($rankingG);
	}
//}//fin if info

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
         </strong></p>
        <strong><hr /> <span class="Estilo5">citasgraciosas.com 2005-<?php echo date('Y') ?> <br />
          Juanuxx y Alex. <br />
          Powered by: </span><span class="icons Estilo5"><a href="http://www.champinet.com/" target="_blank"><font color="#9900FF">CHAMPINET</font></a></span></strong></p>
        <table width="400" border="0" align="center">
          <tr>
            <td width="34%"><div align="left"><strong><span class="icons "><span class="Estilo11 Estilo11"><a href="http://webdesing.champinet.com/cgi-bin/awstats.pl?config=citasgraciosas" target="_blank"><img src="images/stat.gif" alt="Estadisticas" width="44" height="44" border="0" /></a></span></span></strong></div></td>
            <td width="21%"><div align="left"><strong><a href="http://www.citasgraciosas.com/" target="_blank"><img src="images/pc.png" alt="PC" width="40" height="40" border="0" /></a></strong></div></td>
            <td width="21%"><div align="right"><a href="http://www.facebook.com/citasgraciosasweb" target="_blank"><img src="images/f.png" alt="Feed RSS" width="40" height="40" border="0" /></a></div></td>
            <td width="24%"><div align="right"><a href="http://feed.citasgraciosas.com"><img src="images/rss.png" alt="Feed RSS" width="40" height="40" border="0" /></a></div></td>
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
